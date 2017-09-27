<?php

namespace Bludata\DetranPE\Interfaces;

interface DTOInterface
{
    /**
     * @return array
     */
    public function toArray();

    /**
     * @return string
     */
    public function toJson();
}
