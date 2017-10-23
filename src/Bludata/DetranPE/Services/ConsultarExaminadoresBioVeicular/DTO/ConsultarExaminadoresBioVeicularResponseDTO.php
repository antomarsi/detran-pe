<?php

namespace Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="ConsultarExaminadoresBioVeicular")
 */
final class ConsultarExaminadoresBioVeicularResponseDTO extends DTO
{
    /**
     * Código do examinador.
     *
     * @Field(name="nExaminador", order=0, type="integer")
     */
    protected $examinador;

    /**
     * Número do registro da CNH.
     *
     * @Field(name="nRegistroCnh", order=1, type="integer")
     */
    protected $cnh;

    /**
     * Código do usuário.
     *
     * @Field(name="nUsuario", order=2, type="integer")
     */
    protected $usuario;

    /**
     * Número de cpf do candidato.
     *
     * @Field(name="nCpf", order=3, type="integer")
     */
    protected $cpf;

    /**
     * Nome do candidato.
     *
     * @Field(name="sNome", order=4, type="string")
     */
    protected $nome;

    /**
     * Data de validade da cnh.
     *
     * @Field(name="dValidadeCnh", order=5, type="datetime")
     */
    protected $dataValidadeCnh;

    /**
     * Status de registro ativo.
     *
     * @Field(name="iAtivo", order=6, type="boolean")
     */
    protected $ativo;

    /**
     * Ação a ser realizada no cadastro do examinador.
     *
     * @Field(name="sAcao", order=7, type="string")
     */
    protected $acao;

    /**
     * Digital do polegar direito.
     *
     * @Field(name="iDigitalPolDir", order=8, type="string")
     */
    protected $digitalPolegarDireito;

    /**
     * Digital do polegar esquerdo.
     *
     * @Field(name="iDigitalPolEsq", order=9, type="string")
     */
    protected $digitalPolegarEsquerdo;

    /**
     * Digital do indicador direito.
     *
     * @Field(name="iDigitalIndDir", order=10, type="string")
     */
    protected $digitalIndicadorDireito;

    /**
     * Digital do indicador esquerdo.
     *
     * @Field(name="iDigitalIndEsq", order=11, type="string")
     */
    protected $digitalIndicadorEsquerdo;
}
