<?php

namespace Bludata\DetranPE\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\Common\Traits\AttributesTrait;
use Bludata\DetranPE\Exceptions\MethodNotExistsException;
use Bludata\DetranPE\Interfaces\DTOInterface;
use Bludata\DetranPE\Exceptions\InvalidDTOException;
use Bludata\DetranPE\Exceptions\NotJSONEntityException;
use Bludata\DetranPE\Exceptions\NotJSONFieldException;
use Doctrine\Common\Annotations\AnnotationReader;

abstract class DTO implements DTOInterface
{
    use AttributesTrait;

    public function __call($name, $args)
    {
        if (strpos($name, 'set') === 0) {
            $attribute = lcfirst(substr($name, 3));
            if (property_exists($this, $attribute)) {
                $this->$attribute = array_shift($args);

                return $this;
            }
        }

        if (strpos($name, 'get') === 0) {
            $attribute = lcfirst(substr($name, 3));
            if (property_exists($this, $attribute)) {
                return $this->$attribute;
            }
        }

        throw new MethodNotExistsException(get_class($this), $name);
    }

    public function getUrl()
    {
        $paramDTOClassName = $this->getParamDTOName();
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
            $field = $fieldAnnotation->getName();
            $array[$fieldAnnotation->getOrder()] = $this->$field;
        }
        return $this->getName().'/'.implode('/', $array);
    }
}
