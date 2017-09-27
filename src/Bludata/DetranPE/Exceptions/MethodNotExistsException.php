<?php

namespace Bludata\DetranPE\Exceptions;

use LogicException;

class MethodNotExistsException extends LogicException
{
    public function __construct($class, $method, $code = 0, Exception $previous = null)
    {
        $message = sprintf("Class %s doesn't have a method named %s", $class, $method);
        parent::__construct($message, $code, $previous);
    }
}
