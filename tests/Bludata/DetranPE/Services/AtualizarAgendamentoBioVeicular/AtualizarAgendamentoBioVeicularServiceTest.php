<?php

namespace Bludata\Tests\DetranPE\Services\AtualizarAgendamentoBioVeicular;

use Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService;
use TestCase;


class AtualizarAgendamentoBioVeicularServiceTest extends TestCase
{
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new AtualizarAgendamentoBioVeicularService();
    }

    public function tearDown()
    {
        unset($this->service);
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getName
     */
    public function testHasGetNameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getName
     * @depends testHasGetNameMethod
     */
    public function testReturnOfGetNameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getName());
    }

        /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getParamDTOName
     */
    public function testHasGetParamDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getParamDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getParamDTOName
     * @depends testHasGetParamDTONameMethod
     */
    public function testReturnOfGetParamDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getParamDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getResponseDTOName
     */
    public function testHasGetResponseDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getResponseDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getResponseDTOName
     * @depends testHasGetResponseDTONameMethod
     */
    public function testReturnOfGetResponseDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getResponseDTOName());
    }

        /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getMethod
     */
    public function testHasGetMethodMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getMethod'));
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\AtualizarAgendamentoBioVeicularService::getMethod
     * @depends testHasGetMethodMethod
     */
    public function testReturnOfGetMethodIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getMethod());
    }
}