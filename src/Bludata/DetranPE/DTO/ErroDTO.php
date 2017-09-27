<?php

namespace Bludata\DetranPE\DTO;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;

/**
 * @Entity(name="Erro")
 */
class ErroDTO extends DTO
{
    /**
     * Código do erro
     *
     * @Field(name="nErro")
     */
    protected $codigo;

    /**
     * Descrição do erro
     *
     * @Field(name="sErro")
     */
    protected $descricao;
}
