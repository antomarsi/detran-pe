<?php

namespace Bludata\DetranPE\Interfaces;

interface ServiceClientInterface
{
    /**
     * @return null|DTOInterface
     */
    public function call();
}
