<?php

namespace Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="ConsultarAgendamentoBioVeicularEmpresa")
 */
final class ConsultarAgendamentoBioVeicularEmpresaParamDTO extends DTO
{
    /**
     * Ponto de atendimento.
     *
     * @Field(name="nPontoAtendimento", order="0", type="integer")
     */
    protected $pontoAtendimento;

    /**
     * Número de renach do candidato.
     *
     * @Field(name="sFormularioRenach", order="1", type="string")
     */
    protected $renach;

    /**
     * Código da empresa.
     *
     * @Field(name="nEmpresa", order="2", type="integer")
     */
    protected $empresa;
}
