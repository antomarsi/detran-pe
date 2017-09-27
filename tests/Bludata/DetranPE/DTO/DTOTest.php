<?php

namespace Bludata\Tests\DetranPE\DTO;

use TestCase;

class DTOTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        if (class_exists('Bludata\Tests\DetranPE\DTO\StubDTO')) {
            return;
        }

        $stubClass = <<<STUBCLASS
    namespace Bludata\Tests\DetranPE\DTO;

    use Bludata\DetranPE\DTO\DTO;

    class StubDTO extends DTO
    {
        protected \$foo;
    }
STUBCLASS;
        eval($stubClass);
    }

    /**
     * @covers \Bludata\DetranPE\DTO\DTO::__call
     *
     * @uses \Bludata\DetranPE\Exceptions\MethodNotExistsException
     */
    public function testGetAndSetFooAttribute()
    {
        $stubObject = new \Bludata\Tests\DetranPE\DTO\StubDTO();
        $this->assertObjectHasAttribute('foo', $stubObject);
        $this->assertSame($stubObject, $stubObject->setFoo('bar'));
        $this->assertEquals('bar', $stubObject->getFoo('bar'));
    }

    /**
     * @covers \Bludata\DetranPE\DTO\DTO::__call
     *
     * @uses \Bludata\DetranPE\Exceptions\MethodNotExistsException
     * @expectedException \Bludata\DetranPE\Exceptions\MethodNotExistsException
     */
    public function testCallAMethodThatDoesntExists()
    {
        $stubObject = new \Bludata\Tests\DetranPE\DTO\StubDTO();
        $stubObject->callingAMethodThatDoesntExists();
    }
}
