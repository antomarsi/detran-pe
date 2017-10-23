<?php

namespace Bludata\Tests\DetranPE\Services\ConsultarAgendamentoBioVeicular;

use Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService;
use TestCase;


class ConsultarAgendamentoBioVeicularServiceTest extends TestCase
{
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ConsultarAgendamentoBioVeicularService();
    }

    public function tearDown()
    {
        unset($this->service);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getName
     */
    public function testHasGetNameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getName
     * @depends testHasGetNameMethod
     */
    public function testReturnOfGetNameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getName());
    }

        /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getParamDTOName
     */
    public function testHasGetParamDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getParamDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getParamDTOName
     * @depends testHasGetParamDTONameMethod
     */
    public function testReturnOfGetParamDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getParamDTOName());
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getResponseDTOName
     */
    public function testHasGetResponseDTONameMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getResponseDTOName'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getResponseDTOName
     * @depends testHasGetResponseDTONameMethod
     */
    public function testReturnOfGetResponseDTONameIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getResponseDTOName());
    }

        /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getMethod
     */
    public function testHasGetMethodMethod()
    {
        $this->assertTrue(method_exists($this->service, 'getMethod'));
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\ConsultarAgendamentoBioVeicularService::getMethod
     * @depends testHasGetMethodMethod
     */
    public function testReturnOfGetMethodIsNotEmpty()
    {
        $this->assertNotEmpty($this->service->getMethod());
    }
}