<?php

namespace Bludata\Tests\DetranPE\Services\AtualizarExaminadoresBioVeicular;

use Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService;
use TestCase;


class AtualizarExaminadoresBioVeicularServiceTest extends TestCase
{
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new AtualizarExaminadoresBioVeicularService();
    }

    public function tearDown()
    {
        unset($this->service);
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getName
     */
    public function testHasGetNameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getName
     * @depends testHasGetNameMethod
     */
    public function testReturnOfGetNameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getName());
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getParamDTOName
     */
    public function testHasGetParamDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getParamDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getParamDTOName
     * @depends testHasGetParamDTONameMethod
     */
    public function testReturnOfGetParamDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getParamDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getResponseDTOName
     */
    public function testHasGetResponseDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getResponseDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getResponseDTOName
     * @depends testHasGetResponseDTONameMethod
     */
    public function testReturnOfGetResponseDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getResponseDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getMethod
     */
    public function testHasGetMethodMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getMethod'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\AtualizarExaminadoresBioVeicularService::getMethod
     * @depends testHasGetMethodMethod
     */
    public function testReturnOfGetMethodIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getMethod());
    }
}