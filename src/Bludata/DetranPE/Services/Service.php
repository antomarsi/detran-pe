<?php

namespace Bludata\DetranPE\Services;

use Bludata\DetranPE\Interfaces\ServiceInterface;

abstract class Service implements ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    abstract public function getName();

    /**
     * {@inheritdoc}
     */
    abstract public function getParamDTOName();

    /**
     * {@inheritdoc}
     */
    abstract public function getResponseDTOName();
}
