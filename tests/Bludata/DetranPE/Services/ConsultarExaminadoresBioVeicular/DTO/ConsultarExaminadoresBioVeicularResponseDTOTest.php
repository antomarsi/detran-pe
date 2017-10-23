<?php

namespace Bludata\Tests\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO;

use Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO\ConsultarExaminadoresBioVeicularResponseDTO;
use TestCase;

class ConsultarExaminadoresBioVeicularResponseDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        $this->dto = new ConsultarExaminadoresBioVeicularResponseDTO();
    }

    public function tearDown()
    {
        unset($this->dto);
    }

    public function attributes()
    {
        return [
            ['examinador'],
            ['cnh'],
            ['usuario'],
            ['cpf'],
            ['nome'],
            ['dataValidadeCnh'],
            ['ativo'],
            ['acao'],
            ['digitalPolegarDireito'],
            ['digitalPolegarEsquerdo'],
            ['digitalIndicadorDireito'],
            ['digitalIndicadorEsquerdo'],
        ];
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO\ConsultarExaminadoresBioVeicularResponseDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testHasAttribute($attribute)
    {
        $this->assertObjectHasAttribute($attribute, $this->dto);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO\ConsultarExaminadoresBioVeicularResponseDTO
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
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO\ConsultarExaminadoresBioVeicularResponseDTO
     */
    public function testCanBeConvertedToArray()
    {
        $toArray = $this->dto->toArray();
        $this->assertInternalType('array', $toArray);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO\ConsultarExaminadoresBioVeicularResponseDTO
     */
    public function testCanBeConvertedToJson()
    {
        $toJson = $this->dto->toJson();
        $this->assertInternalType('string', $toJson);
    }
}
