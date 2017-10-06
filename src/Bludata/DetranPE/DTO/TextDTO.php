<?php

namespace Bludata\DetranPE\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;

/**
 * @Entity(name="Text")
 */
class TextDTO extends DTO
{
    /**
     * @Field(name="Body", order=0, type="string")
     */
    protected $body;
}
