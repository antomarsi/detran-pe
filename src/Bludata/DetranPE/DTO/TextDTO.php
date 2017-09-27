<?php

namespace Bludata\DetranPE\DTO;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;

/**
 * @Entity(name="Text")
 */
class TextDTO extends DTO
{
    /**
     * @Field(name="Body")
     */
    protected $body;
}
