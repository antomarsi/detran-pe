<?php

namespace Bludata\DetranPE\Services\ExaminadoresBioVeicularS\DTO;

use Bludata\DetranPE\DTO\DTO;
use Bludata\Common\Annotations\XML\Field;
use Bludata\Common\Annotations\XML\Entity;

/**
 * @Entity(name="AgendamentoBioVeicularS")
 */
final class ExaminadoresBioVeicularSResponseDTO extends DTO
{
    /**
     * Código do examinador
     *
     * @Field(name="nExaminador")
     */
    protected $examinador;

    /**
     * Número do registro da CNH
     *
     * @Field(name="nRegistroCnh")
     */
    protected $cnh;

    /**
     * Código do usuário
     *
     * @Field(name="nUsuario")
     */
    protected $usuario;

    /**
     * Número de cpf do candidato
     *
     * @Field(name="nCpf")
     */
    protected $cpf;

    /**
     * Nome do candidato
     *
     * @Field(name="sNome")
     */
    protected $nome;

    /**
     * Data de validade da cnh
     *
     * @Field(name="dValidadeCnh")
     */
    protected $dataValidadeCnh;

    /**
     * Status de registro ativo
     *
     * @Field(name="iAtivo")
     */
    protected $ativo;

    /**
     * Ação a ser realizada no cadastro do examinador
     *
     * @Field(name="sAcao")
     */
    protected $acao;

    /**
     * Ação a ser realizada no cadastro do examinador
     *
     * @Field(name="sAcao")
     */
    protected $acao;

    /**
     * Digital do polegar direito
     *
     * @Field(name="iDigitalPolDir")
     */
    protected $digitalPolegarDireito;

    /**
     * Digital do polegar esquerdo
     *
     * @Field(name="DIgitalPolEsq")
     */
    protected $digitalPolegarEsquerdo;

    /**
     * Digital do indicador direito
     *
     * @Field(name="iDigitalIndDir")
     */
    protected $digitalIndicadorDireito;

    /**
     * Digital do indicador esquerdo
     *
     * @Field(name="iDigitalIndEsq")
     */
    protected $digitalIndicadorEsquerdo;
}
