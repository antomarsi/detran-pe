<?php

namespace Bludata\DetranPE\Interfaces;

use Bludata\DetranPE\Interfaces\ServiceSenderInterface;

interface ServiceClientInterface
{
    /**
     * @return null|DTOInterface
     */
    public function call();
}
