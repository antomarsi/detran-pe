<?php

namespace Bludata\DetranPE\Interfaces;

interface ServiceInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getParamDTOName();

    /**
     * @return string
     */
    public function getResponseDTOName();
}
