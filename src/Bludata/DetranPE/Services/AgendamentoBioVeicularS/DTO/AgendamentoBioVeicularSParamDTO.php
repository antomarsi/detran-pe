<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularS\DTO;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="AgendamentoBioVeicularS")
 */
final class AgendamentoBioVeicularSParamDTO extends DTO
{
    /**
     * Ponto de atendimento.
     *
     * @Field(name="nPontoAtendimento")
     */
    protected $pontoAtendimento;

    /**
     * Número de renach do candidato.
     *
     * @Field(name="sFormularioRenach")
     */
    protected $renach;

    /**
     * Código da empresa.
     *
     * @Field(name="nEmpresa")
     */
    protected $empresa;
}
