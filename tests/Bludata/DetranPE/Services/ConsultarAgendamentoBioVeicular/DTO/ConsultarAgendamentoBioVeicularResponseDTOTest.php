<?php

namespace Bludata\Tests\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO;

use Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularResponseDTO;
use TestCase;

class ConsultarAgendamentoBioVeicularResponseDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        $this->dto = new ConsultarAgendamentoBioVeicularResponseDTO();
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
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularResponseDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testHasAttribute($attribute)
    {
        $this->assertObjectHasAttribute($attribute, $this->dto);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularResponseDTO
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
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularResponseDTO
     */
    public function testCanBeConvertedToArray()
    {
        $toArray = $this->dto->toArray();
        $this->assertInternalType('array', $toArray);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularResponseDTO
     */
    public function testCanBeConvertedToJson()
    {
        $toJson = $this->dto->toJson();
        $this->assertInternalType('string', $toJson);
    }
}
