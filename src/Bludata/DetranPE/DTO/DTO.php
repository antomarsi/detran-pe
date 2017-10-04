<?php

namespace Bludata\DetranPE\DTO;

use Bludata\Common\Annotations\JSON\Field;
use Bludata\Common\Traits\AttributesTrait;
use Bludata\DetranPE\Exceptions\MethodNotExistsException;
use Bludata\DetranPE\Interfaces\DTOInterface;

abstract class DTO implements DTOInterface
{
    use AttributesTrait;

    /**
     * @Field(name="Confirmacao")
     */
    protected $confirmacao;

    /**
     * @Field(name="DescricaoErro")
     */
    protected $descricaoErro;

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
