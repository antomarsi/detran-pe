<?php

namespace Bludata\Tests\DetranPE\Services\AutenticaCliente;

use SoapClient;
use TestCase;
use Bludata\DetranPE\Services\AutenticaCliente\AutenticaClienteService;
use Bludata\DetranPE\Services\AutenticaCliente\DTO\AutenticacaoDTO;
use Bludata\DetranPE\Clients\SoapServiceClient;

class AutenticaClienteServiceTest extends TestCase
{
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new AutenticaClienteService;
    }

    public function tearDown()
    {
        unset($this->service);
    }

    /**
     * @covers Bludata\DetranPE\Services\AutenticaCliente\AutenticaClienteService::getName
     */
    public function testHasGetNameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AutenticaCliente\AutenticaClienteService::getName
     * @depends testHasGetNameMethod
     */
    public function testReturnOfGetNameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getName());
    }
}
