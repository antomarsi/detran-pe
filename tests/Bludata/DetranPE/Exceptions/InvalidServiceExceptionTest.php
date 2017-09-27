<?php

namespace Bludata\Tests\DetranPE\Exceptions;

use Bludata\DetranPE\Exceptions\InvalidServiceException;
use TestCase;

class InvalidServiceExceptionTest extends TestCase
{
    /**
     * @covers Bludata\DetranPE\Exceptions\InvalidServiceException
     * @expectedException Bludata\DetranPE\Exceptions\InvalidServiceException
     */
    public function testIsThrowable()
    {
        throw new InvalidServiceException('Lorem Ipsum...');
    }
}
