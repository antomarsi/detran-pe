<?php

namespace Bludata\Tests\DetranPE\Services\AgendamentoBioVeicularS\DTO;

use TestCase;
use Bludata\DetranPE\Services\AgendamentoBioVeicularS\DTO\AgendamentoBioVeicularSParamDTO;

class AgendamentoBioVeicularSParamDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        $this->dto = new AgendamentoBioVeicularSParamDTO;
    }

    public function tearDown()
    {
        unset($this->dto);
    }

    public function attributes()
    {
        return [
            ['numeroProcesso'],
            ['categoria'],
            ['disponibilidade']
        ];
    }

    /**
     * @covers Bludata\DetranPE\Services\AutenticaCliente\DTO\AutenticacaoDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testHasAttribute($attribute)
    {
        $this->assertObjectHasAttribute($attribute, $this->dto);
    }

    /**
     * @covers Bludata\DetranPE\Services\AutenticaCliente\DTO\AutenticacaoDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testThatAttributeCanBeSettedAndGetted($attribute)
    {
        $setMethod = $this->dto->setMethod($attribute);
        $this->dto->$setMethod('foo');
        $getMethod = $this->dto->getMethod($attribute);
        $this->assertEquals('foo', $this->dto->$getMethod());
    }

    /**
     * @covers Bludata\DetranPE\Services\AutenticaCliente\DTO\AutenticacaoDTO
     */
    public function testCanBeConvertedToArray()
    {
        $toArray = $this->dto->toArray();
        $this->assertInternalType('array', $toArray);
    }

    /**
     * @covers Bludata\DetranPE\Services\AutenticaCliente\DTO\AutenticacaoDTO
     */
    public function testCanBeConvertedToJson()
    {
        $toJson = $this->dto->toJson();
        $this->assertInternalType('string', $toJson);
    }
}
