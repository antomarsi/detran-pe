<?php

namespace Bludata\DetranPE\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\Common\Traits\AttributesTrait;
use Bludata\DetranPE\Exceptions\InvalidDTOException;
use Bludata\DetranPE\Exceptions\MethodNotExistsException;
use Bludata\DetranPE\Exceptions\NotJSONEntityException;
use Bludata\DetranPE\Exceptions\NotJSONFieldException;
use Bludata\DetranPE\Interfaces\DTOInterface;
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
}
