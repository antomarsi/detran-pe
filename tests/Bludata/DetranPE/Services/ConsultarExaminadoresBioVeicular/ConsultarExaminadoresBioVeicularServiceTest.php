<?php

namespace Bludata\Tests\DetranPE\Services\ConsultarExaminadoresBioVeicular;

use Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService;
use TestCase;


class ConsultarExaminadoresBioVeicularServiceTest extends TestCase
{
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ConsultarExaminadoresBioVeicularService();
    }

    public function tearDown()
    {
        unset($this->service);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getName
     */
    public function testHasGetNameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getName
     * @depends testHasGetNameMethod
     */
    public function testReturnOfGetNameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getName());
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getParamDTOName
     */
    public function testHasGetParamDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getParamDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getParamDTOName
     * @depends testHasGetParamDTONameMethod
     */
    public function testReturnOfGetParamDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getParamDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getResponseDTOName
     */
    public function testHasGetResponseDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getResponseDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getResponseDTOName
     * @depends testHasGetResponseDTONameMethod
     */
    public function testReturnOfGetResponseDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getResponseDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getMethod
     */
    public function testHasGetMethodMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getMethod'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\ConsultarExaminadoresBioVeicularService::getMethod
     * @depends testHasGetMethodMethod
     */
    public function testReturnOfGetMethodIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getMethod());
    }
}