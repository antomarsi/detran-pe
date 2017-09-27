<?php

namespace Bludata\Tests\DetranPE\Exceptions;

use Bludata\DetranPE\Exceptions\MethodNotExistsException;
use TestCase;

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
