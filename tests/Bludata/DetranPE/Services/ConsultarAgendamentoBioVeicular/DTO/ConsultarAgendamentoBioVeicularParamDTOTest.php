<?php

namespace Bludata\Tests\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO;

use Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularParamDTO;
use TestCase;

class ConsultarAgendamentoBioVeicularParamDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        $this->dto = new ConsultarAgendamentoBioVeicularParamDTO();
    }

    public function tearDown()
    {
        unset($this->dto);
    }

    public function attributes()
    {
        return [
            ['pontoAtendimento'],
            ['renach'],
        ];
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularParamDTO
     * @covers Bludata\DetranPE\DTO\DTO::__call
     * @dataProvider attributes
     */
    public function testHasAttribute($attribute)
    {
        $this->assertObjectHasAttribute($attribute, $this->dto);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularParamDTO
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
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularParamDTO
     */
    public function testCanBeConvertedToArray()
    {
        $toArray = $this->dto->toArray();
        $this->assertInternalType('array', $toArray);
    }

    /**
     * @covers Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular\DTO\ConsultarAgendamentoBioVeicularParamDTO
     */
    public function testCanBeConvertedToJson()
    {
        $toJson = $this->dto->toJson();
        $this->assertInternalType('string', $toJson);
    }
}
