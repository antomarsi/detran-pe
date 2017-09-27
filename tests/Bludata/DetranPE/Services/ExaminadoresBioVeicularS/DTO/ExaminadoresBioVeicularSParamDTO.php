<?php

namespace Bludata\DetranPE\Services\ExaminadoresBioVeicularS\DTO;

use Bludata\DetranPE\DTO\DTO;
use Bludata\Common\Annotations\XML\Field;
use Bludata\Common\Annotations\XML\Entity;

/**
 * @Entity(name="AgendamentoBioVeicularS")
 */
final class ExaminadoresBioVeicularSParamDTO extends DTO
{
    /**
     * Número de cpf do candidato
     *
     * @Field(name="nCpf")
     */
    protected $cpf;
}
