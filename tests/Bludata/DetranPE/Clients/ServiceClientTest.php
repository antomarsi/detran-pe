<?php

namespace Bludata\Tests\DetranPE\Clients;

use TestCase;
use Bludata\DetranPE\Clients\ServiceClient;

class ServiceClientTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        if (class_exists('Bludata\Tests\DetranPE\Clients\StubDSS')) {
            return;
        }

        $stubClass = <<<STUBCLASS
    namespace Bludata\Tests\DetranPE\Clients;

    use Bludata\DetranPE\Clients\ServiceClient;

    class StubDSS extends ServiceClient
    {
        public function call()
        {
            //
        }
    }
STUBCLASS;
        eval($stubClass);
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::dto
     */
    public function testdtoMethodExists()
    {
        $stub = new StubDSS;
        $this->assertTrue(method_exists($stub, 'dto'));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::service
     */
    public function testserviceMethodExists()
    {
        $stub = new StubDSS;
        $this->assertTrue(method_exists($stub, 'service'));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validDTO
     */
    public function testCallingValidDTOWithInvalidDTOReturnFalse()
    {
        $stub = new StubDSS;
        $this->assertFalse($stub->validDTO(new \stdClass));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validDTO
     */
    public function testCallingValidDTOWithValidDTOReturnTrue()
    {
        $mock = $this->createMock('Bludata\DetranPE\Interfaces\DTOInterface');
        $stub = new StubDSS;
        $this->assertTrue($stub->validDTO($mock));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validDTOOrDie
     * @uses Bludata\DetranPE\Clients\ServiceClient::validDTO
     * @expectedException Bludata\DetranPE\Exceptions\InvalidDTOException
     */
    public function testValidDTOOrDie()
    {
        $stub = new StubDSS;
        $stub->validDTOOrDie(null);
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validDTOOrDie
     * @uses Bludata\DetranPE\Clients\ServiceClient::validDTO
     */
    public function testValidDTOOrDieReturnItSelfIfDTOIsValid()
    {
        $mock = $this->createMock('Bludata\DetranPE\Interfaces\DTOInterface');
        $stub = new StubDSS;
        $this->assertSame($stub, $stub->validDTOOrDie($mock));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validService
     */
    public function testCallingValidServiceWithInvalidServiceReturnFalse()
    {
        $stub = new StubDSS;
        $this->assertFalse($stub->validService(new \stdClass));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validService
     */
    public function testCallingValidServiceWithValidServiceReturnTrue()
    {
        $mock = $this->createMock('Bludata\DetranPE\Interfaces\ServiceInterface');
        $stub = new StubDSS;
        $this->assertTrue($stub->validService($mock));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validServiceOrDie
     * @uses Bludata\DetranPE\Clients\ServiceClient::validService
     * @expectedException Bludata\DetranPE\Exceptions\InvalidServiceException
     */
    public function testValidServiceOrDie()
    {
        $stub = new StubDSS;
        $stub->validServiceOrDie(null);
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::validServiceOrDie
     * @uses Bludata\DetranPE\Clients\ServiceClient::validService
     */
    public function testValidServiceOrDieReturnItSelfIfDTOIsValid()
    {
        $mock = $this->createMock('Bludata\DetranPE\Interfaces\ServiceInterface');
        $stub = new StubDSS;
        $this->assertSame($stub, $stub->validServiceOrDie($mock));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::dto
     */
    public function testdtoIsCallableAndReturnItSelf()
    {
        $mock = $this->createMock('Bludata\DetranPE\Interfaces\DTOInterface');
        $stub = new StubDSS;
        $this->assertSame($stub, $stub->dto($mock));
    }

    /**
     * @covers Bludata\DetranPE\Clients\ServiceClient::service
     */
    public function testserviceIsCallableAndReturnItSelf()
    {
        $mock = $this->createMock('Bludata\DetranPE\Interfaces\ServiceInterface');
        $stub = new StubDSS;
        $this->assertSame($stub, $stub->service($mock));
    }
}
