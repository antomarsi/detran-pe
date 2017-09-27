<?php

namespace Bludata\DetranPE\Services\AutenticaCliente\DTO;

use Bludata\DetranPE\DTO\DTO;
use Bludata\Common\Annotations\XML\Field;
use Bludata\Common\Annotations\XML\Entity;

/**
 * @Entity(name="AgendamentoBioVeicularS")
 */
final class AgendamentoBioVeicularSParamDTO extends DTO
{
    /**
     * Número do processo do candidato
     *
     * @Field(name="nProcess")
     */
    protected $numeroProcesso;

    /**
     * Categoria pretendida pelo candidato
     *
     * @Field(name="sCategoriaCnh")
     */
    protected $categoria;

    /**
     * Data do agendamento
     *
     * @Field(name="dDisponibilidade")
     */
    protected $disponibilidade;
}
