<?php

namespace Bludata\DetranPE\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;

/**
 * @Entity(name="Erro")
 */
class ErroDTO extends DTO
{
    /**
     * Código do erro.
     *
     * @Field(name="nErro", order=0, type="integer")
     */
    protected $codigo;

    /**
     * Descrição do erro.
     *
     * @Field(name="sErro", order=0, type="text")
     */
    protected $descricao;
}
