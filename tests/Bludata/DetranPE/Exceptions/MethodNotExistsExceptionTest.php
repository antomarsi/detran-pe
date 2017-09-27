<?php

namespace Bludata\Tests\DetranPE\Exceptions;

use TestCase;
use Bludata\DetranPE\Exceptions\MethodNotExistsException;

class MethodNotExistsExceptionTest extends TestCase
{
    /**
     * @covers Bludata\DetranPE\Exceptions\MethodNotExistsException
     * @expectedException Bludata\DetranPE\Exceptions\MethodNotExistsException
     * @expectedExceptionMessageRegExp /SomeClass.*someMethod/
     */
    public function testIsThrowable()
    {
        throw new MethodNotExistsException('SomeClass', 'someMethod');
    }
}
