<?php

namespace Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="AtualizarAgendamentoBioVeicular")
 */
final class AtualizarAgendamentoBioVeicularParamDTO extends DTO
{
    /**
     * Número do processo do candidato.
     *
     * @Field(name="nProcess", order="0", type="float")
     */
    protected $numeroProcesso;

    /**
     * Categoria pretendida pelo candidato.
     *
     * @Field(name="sCategoriaCnh", order="1", type="string")
     */
    protected $categoria;

    /**
     * Data do agendamento.
     *
     * @Field(name="dDisponibilidade", order="2", type="datetime")
     */
    protected $disponibilidade;
}
