<?php

namespace Bludata\DetranPE\Clients;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\Exceptions\EmptyResponseDTOException;
use Bludata\DetranPE\Exceptions\InvalidDTOException;
use Bludata\DetranPE\Exceptions\NotJSONEntityException;
use Bludata\DetranPE\Exceptions\NotJSONFieldException;
use Doctrine\Common\Annotations\AnnotationReader;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class RestServiceClient extends ServiceClient
{
    private $baseUrl;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function functionName()
    {
        return $this->service->getName();
    }

    public function createDTOResponse($data)
    {
        if (!$data) {
            return;
        }
        $data = json_decode($data, true);
        if (empty($data)) {
            throw new EmptyResponseDTOException('Response is empty');
        }
        if (isset($data[0])) {
            $data = $data[0];
        }
        $responseDTOClassName = $this->service->getResponseDTOName();

        if (!$responseDTOClassName) {
            throw new InvalidDTOException('Response DTO was not set');
        }

        $class = new \ReflectionClass($responseDTOClassName);
        $reader = new AnnotationReader();
        $jsonEntityAnnotation = $reader->getClassAnnotation(
            $class,
            'Bludata\Common\Annotations\JSON\Entity'
        );
        if (empty($jsonEntityAnnotation)) {
            $message = sprintf('Class "%s" is not a valid JSON entity', get_class($this->dto));

            throw new NotJSONEntityException($message);
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

                throw new NotJSONFieldException($message);
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

    public function call($callback = null)
    {
        $this->validServiceOrDie($this->service);

        $functionName = $this->functionName();

        if ($this->logger instanceof LoggerInterface) {
            $this->logger->debug('Sending Data: '.$params);
        }

        try {
            $response = $this->client->request($this->service->getMethod(), $this->getUrl(), []);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                abort($e->getResponse()->getStatusCode(), Psr7\str($e->getResponse()));
            }
            abort(500, Psr7\str($e->getRequest()));
        }
        if (is_callable($callback)) {
            return $callback($response->getBody()->getContents());
        } else {
            return $this->createDTOResponse($response->getBody()->getContents());
        }
    }

    public function getUrl()
    {
        $paramDTOClassName = $this->service->getParamDTOName();
        if (!$paramDTOClassName) {
            throw new InvalidDTOException('Param DTO was not set');
        }
        $class = new \ReflectionClass($paramDTOClassName);
        $reader = new AnnotationReader();
        $jsonEntityAnnotation = $reader->getClassAnnotation(
            $class,
            'Bludata\Common\Annotations\JSON\Entity'
        );
        if (empty($jsonEntityAnnotation)) {
            $message = sprintf('Class "%s" is not a valid JSON entity', get_class($this->dto));

            throw new NotJSONEntityException($message);
        }
        $array = [];
        foreach ($class->getProperties() as $property) {
            $fieldAnnotation = $reader->getPropertyAnnotation(
                $property,
                'Bludata\Common\Annotations\JSON\Field'
            );
            if (!$fieldAnnotation) {
                $message = sprintf(
                    'Field "%s" is not a valid JSON field from class "%s"',
                    $property->getName(),
                    $paramDTOClassName
                );

                throw new NotJSONFieldException($message);
            }
            $field = $property->getName();
            $array[$fieldAnnotation->getOrder()] = $this->dto->$field;
        }

        return $this->service->getName().'/'.implode('/', $array);
    }
}
