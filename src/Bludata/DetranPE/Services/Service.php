<?php

namespace Bludata\DetranPE\Services;

use Bludata\DetranPE\Interfaces\ServiceInterface;

abstract class Service implements ServiceInterface
{
    /**
     * @{inheritDoc}
     */
    abstract public function getName();

    /**
     * @{inheritDoc}
     */
    abstract public function getParamDTOName();

    /**
     * @{inheritDoc}
     */
    abstract public function getResponseDTOName();
}
