<?php

namespace Bludata\Tests\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa;

use Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService;
use TestCase;

class ConsultarAgendamentoBioVeicularEmpresaServiceTest extends TestCase
{
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ConsultarAgendamentoBioVeicularEmpresaService();
    }

    public function tearDown()
    {
        unset($this->service);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getName
     */
    public function testHasGetNameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getName
     * @depends testHasGetNameMethod
     */
    public function testReturnOfGetNameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getName());
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getParamDTOName
     */
    public function testHasGetParamDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getParamDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getParamDTOName
     * @depends testHasGetParamDTONameMethod
     */
    public function testReturnOfGetParamDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getParamDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getResponseDTOName
     */
    public function testHasGetResponseDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getResponseDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getResponseDTOName
     * @depends testHasGetResponseDTONameMethod
     */
    public function testReturnOfGetResponseDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getResponseDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getMethod
     */
    public function testHasGetMethodMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getMethod'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\ConsultarAgendamentoBioVeicularEmpresaService::getMethod
     * @depends testHasGetMethodMethod
     */
    public function testReturnOfGetMethodIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getMethod());
    }

}