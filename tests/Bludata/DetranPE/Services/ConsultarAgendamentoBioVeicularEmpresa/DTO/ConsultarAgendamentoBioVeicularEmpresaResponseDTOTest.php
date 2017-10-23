<?php

namespace Bludata\Tests\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO;

use Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO\ConsultarAgendamentoBioVeicularEmpresaResponseDTO;
use TestCase;

class ConsultarAgendamentoBioVeicularEmpresaResponseDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        $this->dto = new ConsultarAgendamentoBioVeicularEmpresaResponseDTO();
    }

    public function tearDown()
    {
        unset($this->dto);
    }

    public function attributes()
    {
        return [
            ['renach'],
            ['numeroProcesso'],
            ['cpf'],
            ['nome'],
            ['disponibilidade'],
            ['categoria'],
            ['status'],
            ['foto'],
            ['digitalPolegarDireito'],
            ['digitalPolegarEsquerdo'],
            ['digitalIndicadorDireito'],
            ['digitalIndicadorEsquerdo'],
        ];
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO\ConsultarAgendamentoBioVeicularEmpresaResponseDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testHasAttribute($attribute)
    {
        $this->assertObjectHasAttribute($attribute, $this->dto);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO\ConsultarAgendamentoBioVeicularEmpresaResponseDTO
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
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO\ConsultarAgendamentoBioVeicularEmpresaResponseDTO
     */
    public function testCanBeConvertedToArray()
    {
        $toArray = $this->dto->toArray();
        $this->assertInternalType('array', $toArray);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO\ConsultarAgendamentoBioVeicularEmpresaResponseDTO
     */
    public function testCanBeConvertedToJson()
    {
        $toJson = $this->dto->toJson();
        $this->assertInternalType('string', $toJson);
    }
}
