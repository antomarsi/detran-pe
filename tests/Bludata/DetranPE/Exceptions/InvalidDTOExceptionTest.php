<?php

namespace Bludata\Tests\DetranPE\Exceptions;

use Bludata\DetranPE\Exceptions\InvalidDTOException;
use TestCase;

class InvalidDTOExceptionTest extends TestCase
{
    /**
     * @covers Bludata\DetranPE\Exceptions\InvalidDTOException
     * @expectedException Bludata\DetranPE\Exceptions\InvalidDTOException
     */
    public function testIsThrowable()
    {
        throw new InvalidDTOException('Lorem Ipsum...');
    }
}
