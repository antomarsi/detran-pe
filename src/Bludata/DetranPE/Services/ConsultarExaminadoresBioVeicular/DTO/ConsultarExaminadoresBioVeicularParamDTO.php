<?php

namespace Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="ConsultarExaminadoresBioVeicular")
 */
final class ConsultarExaminadoresBioVeicularParamDTO extends DTO
{
    /**
     * Número de cpf do candidato.
     *
     * @Field(name="nCpf", order=0, type="integer")
     */
    protected $cpf;
}
