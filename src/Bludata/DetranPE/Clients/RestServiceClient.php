<?php

namespace Bludata\DetranPE\Clients;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;
use Bludata\Common\Converters\XMLConverter;
use Bludata\DetranPE\Exceptions\InvalidDTOException;
use Bludata\DetranPE\Exceptions\NotXMLEntityException;
use Bludata\DetranPE\Exceptions\NotXMLFieldException;
use Doctrine\Common\Annotations\AnnotationReader;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class RestServiceClient extends ServiceClient
{
    private $baseUrl;

    public function __construct($baseUrl = null)
    {
        $this->baseUrl = $baseUrl;
        $this->client = new Client();
    }

    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function getBaseUrl($baseUrl)
    {
        return $this->baseUrl();
    }

    public function functionName()
    {
        return $this->service->getName();
    }

    protected function createDTOResponse($data)
    {
        if (!$data) {
            return;
        }
        $data = json_decode($data, true);
        $responseDTOClassName = $this->service->getResponseDTOName();
        if (!$responseDTOClassName) {
            throw new InvalidDTOException('Response DTO was not set');
        }
        $class = new \ReflectionClass($responseDTOClassName);
        $reader = new AnnotationReader();
        $xmlEntityAnnotation = $reader->getClassAnnotation(
            $class,
            'Bludata\Common\Annotations\JSON\Entity'
        );
        if (empty($xmlEntityAnnotation)) {
            $message = sprintf('Class "%s" is not a valid JSON entity', get_class($this->dto));
            throw new NotXMLEntityException($message);
        }
        $instance = $class->newInstance();
        foreach ($class->getProperties() as $property) {
            $fieldAnnotation = $reader->getPropertyAnnotation(
                $property,
                'Bludata\Common\Annotations\JSON\Field'
            );
            if (!$fieldAnnotation) {
                $message = sprintf(
                    'Field "%s" is not a valid JSON field from class "%s"',
                    $property->getName(),
                    $responseDTOClassName
                );
                throw new NotXMLFieldException($message);
            }
            $field = $fieldAnnotation->getName();
            $value = null;
            if (is_object($data)) {
                if (property_exists($data, $field)) {
                    $value = $data->$field;
                }
            }
            if (is_array($data)) {
                if (array_key_exists($field, $data)) {
                    $value = $data[$field];
                }
            }
            $setMethod = $instance->setMethod($property->getName());
            $instance->$setMethod($value);
        }
        return $instance;
    }

    public function call($method = 'GET', $headers = [])
    {
        $this->validServiceOrDie($this->service);

        $functionName = $this->functionName();

        $params = $this->dto->toArray();
        $params = implode('/', $params);

        if ($this->logger instanceof LoggerInterface) {
            $this->logger->debug('Sending Data: '.$params);
        }

        $url = $this->baseUrl.'/'.$functionName.'/'.$params;
        try {
            $response = $this->client->request($method, $url, $headers);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                abort($e->getResponse()->getStatusCode(), Psr7\str($e->getResponse()));
            }
            abort(500, Psr7\str($e->getRequest()));
        }

        return $this->createDTOResponse($response);
    }
}
