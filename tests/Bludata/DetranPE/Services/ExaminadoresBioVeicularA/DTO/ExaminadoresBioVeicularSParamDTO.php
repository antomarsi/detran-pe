<?php

namespace Bludata\DetranPE\Services\ExaminadoresBioVeicularA\DTO;

use Bludata\DetranPE\DTO\DTO;
use Bludata\Common\Annotations\XML\Field;
use Bludata\Common\Annotations\XML\Entity;

/**
 * @Entity(name="AgendamentoBioVeicularA")
 */
final class ExaminadoresBioVeicularAParamDTO extends DTO
{
    /**
     * Código do examinador
     *
     * @Field(name="nExaminador")
     */
    protected $examinador;

    /**
     * Ação a ser realizada no cadastro do examinador
     *
     * @Field(name="sAcao")
     */
    protected $acao;
}
