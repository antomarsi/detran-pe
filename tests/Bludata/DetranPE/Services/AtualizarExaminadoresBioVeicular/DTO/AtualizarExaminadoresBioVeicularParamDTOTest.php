<?php

namespace Bludata\Tests\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO;

use Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO\AtualizarExaminadoresBioVeicularParamDTO;
use TestCase;

class AtualizarExaminadoresBioVeicularParamDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        $this->dto = new AtualizarExaminadoresBioVeicularParamDTO();
    }

    public function tearDown()
    {
        unset($this->dto);
    }

    public function attributes()
    {
        return [
            ['examinador'],
            ['acao'],
        ];
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO\AtualizarExaminadoresBioVeicularParamDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testHasAttribute($attribute)
    {
        $this->assertObjectHasAttribute($attribute, $this->dto);
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO\AtualizarExaminadoresBioVeicularParamDTO
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
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO\AtualizarExaminadoresBioVeicularParamDTO
     */
    public function testCanBeConvertedToArray()
    {
        $toArray = $this->dto->toArray();
        $this->assertInternalType('array', $toArray);
    }

    /**
     * @covers Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO\AtualizarExaminadoresBioVeicularParamDTO
     */
    public function testCanBeConvertedToJson()
    {
        $toJson = $this->dto->toJson();
        $this->assertInternalType('string', $toJson);
    }
}
