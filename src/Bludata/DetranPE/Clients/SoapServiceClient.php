<?php

namespace Bludata\DetranPE\Clients;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;
use Bludata\Common\Converters\XMLConverter;
use Bludata\DetranPE\Exceptions\InvalidDTOException;
use Bludata\DetranPE\Exceptions\NotXMLEntityException;
use Bludata\DetranPE\Exceptions\NotXMLFieldException;
use Doctrine\Common\Annotations\AnnotationReader;
use SoapClient;

class SoapServiceClient extends ServiceClient
{
    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    public function functionName()
    {
        return $this->service->getName();
    }

    protected function extractXMLFromResponse($response)
    {
        $xml = get_object_vars($response);
        $xml = array_pop($xml);
        $xml = get_object_vars($xml);
        if (!array_key_exists('any', $xml)) {
            return;
        }

        $xml = $xml['any'];
        $data = $this->toArray($xml);
        if (!array_key_exists('NewDataSet', $data)) {
            return;
        }

        $data = $data['NewDataSet'];
        if (!array_key_exists('Table', $data)) {
            return;
        }

        $data = $data['Table'];

        return $data;
    }

    protected function createDTOResponse($data)
    {
        if (!$data) {
            return;
        }

        $data = $this->extractXMLFromResponse($data);

        $responseDTOClassName = $this->service->getResponseDTOName();
        if (!$responseDTOClassName) {
            throw new InvalidDTOException('Response DTO was not set');
        }

        $class = new \ReflectionClass($responseDTOClassName);
        $reader = new AnnotationReader();
        $xmlEntityAnnotation = $reader->getClassAnnotation(
            $class,
            'Bludata\Common\Annotations\XML\Entity'
        );

        if (empty($xmlEntityAnnotation)) {
            $message = sprintf('Class "%s" is not a valid XML entity', get_class($this->dto));

            throw new NotXMLEntityException($message);
        }

        $instance = $class->newInstance();
        foreach ($class->getProperties() as $property) {
            $fieldAnnotation = $reader->getPropertyAnnotation(
                $property,
                'Bludata\Common\Annotations\XML\Field'
            );
            if (!$fieldAnnotation) {
                $message = sprintf(
                    'Field "%s" is not a valid XML field from class "%s"',
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

    protected function toArray($xml)
    {
        $xml = simplexml_load_string($xml);
        $array = json_decode(json_encode($xml), true);

        return $this->removeEmptyValues($array);
    }

    private function removeEmptyValues($array)
    {
        foreach ($array as $key => $value) {
            if (is_string($value) && strlen($value)) {
                continue;
            }

            if (is_bool($value)) {
                continue;
            }

            if (empty($value)) {
                $array[$key] = null;
                continue;
            }

            if (is_array($value)) {
                $array[$key] = $this->removeEmptyValues($value);
            }
        }

        return $array;
    }

    /**
     * @param array $array Array to convert to XML string
     *
     * @return string
     */
    protected function toXML($element)
    {
        $converter = new XMLConverter();

        return $converter->toString($element);
    }

    public function call()
    {
        $this->validServiceOrDie($this->service);
        $functionName = $this->functionName();
        $params = $this->toXML($this->dto);

        if ($this->logger instanceof LoggerInterface) {
            $this->logger->debug('Sending XML: '.$params);
        }

        $response = $this->soapClient->__soapCall(
            $functionName,
            [
                $functionName => [
                    'xmlEntrada' => [
                        'any' => [
                            $params,
                        ],
                    ],
                ],
            ]
        );

        return $this->createDTOResponse($response);
    }
}
