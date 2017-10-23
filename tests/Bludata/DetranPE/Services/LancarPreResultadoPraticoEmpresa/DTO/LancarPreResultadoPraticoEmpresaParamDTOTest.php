<?php

namespace Bludata\Tests\DetranPE\Services\LancarPreResultadoPraticoEmpresa\DTO;

use Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\DTO\LancarPreResultadoPraticoEmpresaParamDTO;
use TestCase;

class LancarPreResultadoPraticoEmpresaParamDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        $this->dto = new LancarPreResultadoPraticoEmpresaParamDTO();
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
            ['resultado'],
            ['dataResultado'],
            ['examinador'],
            ['desistencia'],
            ['pontoAtendimento'],
            ['examinadorRampa'],
            ['resultadoRampa'],
            ['examinadorGaragem'],
            ['resultadoGaragem'],
            ['examinadorBaliza'],
            ['resultadoBaliza'],
            ['examinadorRua'],
            ['resultadoRua'],
        ];
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\DTO\LancarPreResultadoPraticoEmpresaParamDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testHasAttribute($attribute)
    {
        $this->assertObjectHasAttribute($attribute, $this->dto);
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\DTO\LancarPreResultadoPraticoEmpresaParamDTO
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
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\DTO\LancarPreResultadoPraticoEmpresaParamDTO
     */
    public function testCanBeConvertedToArray()
    {
        $toArray = $this->dto->toArray();
        $this->assertInternalType('array', $toArray);
    }

    /**
     * @covers Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\DTO\LancarPreResultadoPraticoEmpresaParamDTO
     */
    public function testCanBeConvertedToJson()
    {
        $toJson = $this->dto->toJson();
        $this->assertInternalType('string', $toJson);
    }
}
