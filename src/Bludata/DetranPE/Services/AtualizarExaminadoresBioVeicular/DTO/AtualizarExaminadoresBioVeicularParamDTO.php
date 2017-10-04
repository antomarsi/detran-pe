<?php

namespace Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="AtualizarExaminadoresBioVeicular")
 */
final class AtualizarExaminadoresBioVeicularParamDTO extends DTO
{
    /**
     * Código do examinador.
     *
     * @Field(name="nExaminador", order="", type="integer")
     */
    protected $examinador;

    /**
     * Ação a ser realizada no cadastro do examinador.
     *
     * @Field(name="sAcao", order="", type="string")
     */
    protected $acao;
}
