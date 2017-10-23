<?php

namespace Bludata\Tests\DetranPE\Services\LancarPreResultadoPraticoEmpresa;

use Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService;
use TestCase;


class LancarPreResultadoPraticoEmpresaServiceTest extends TestCase
{
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new LancarPreResultadoPraticoEmpresaService();
    }

    public function tearDown()
    {
        unset($this->service);
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getName
     */
    public function testHasGetNameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getName
     * @depends testHasGetNameMethod
     */
    public function testReturnOfGetNameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getName());
    }

        /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getParamDTOName
     */
    public function testHasGetParamDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getParamDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getParamDTOName
     * @depends testHasGetParamDTONameMethod
     */
    public function testReturnOfGetParamDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getParamDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getResponseDTOName
     */
    public function testHasGetResponseDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getResponseDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getResponseDTOName
     * @depends testHasGetResponseDTONameMethod
     */
    public function testReturnOfGetResponseDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getResponseDTOName());
    }

        /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getMethod
     */
    public function testHasGetMethodMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getMethod'));
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\LancarPreResultadoPraticoEmpresaService::getMethod
     * @depends testHasGetMethodMethod
     */
    public function testReturnOfGetMethodIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getMethod());
    }
}