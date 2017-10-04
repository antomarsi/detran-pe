<?php

namespace Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="ConsultarAgendamentoBioVeicularEmpresa")
 */
final class ConsultarAgendamentoBioVeicularEmpresaResponseDTO extends DTO
{
    /**
     * Número de renach do candidato.
     *
     * @Field(name="sFormularioRenach", order="0", type="string")
     */
    protected $renach;

    /**
     * Número do processo do candidato.
     *
     * @Field(name="nProcess", order="1", type="integer")
     */
    protected $numeroProcesso;

    /**
     * Número de cpf do candidato.
     *
     * @Field(name="nCpf", order="2", type="integer")
     */
    protected $cpf;

    /**
     * Nome do candidato.
     *
     * @Field(name="sNome", order="3", type="string")
     */
    protected $nome;

    /**
     * Data do agendamento.
     *
     * @Field(name="dDisponibilidade", order="4", type="datetime")
     */
    protected $disponibilidade;

    /**
     * Categoria pretendida pelo candidato.
     *
     * @Field(name="sCategoriaCnh", order="5", type="string")
     */
    protected $categoria;

    /**
     * Status atual do agendamento, "I" = Inserindo, "C" = Cancelando.
     *
     * @Field(name="sStatusAgend", order="6", type="string")
     */
    protected $status;

    /**
     * Foto do candidato.
     *
     * @Field(name="iFoto", order="7", type="string")
     */
    protected $foto;

    /**
     * Digital do polegar direito.
     *
     * @Field(name="iDigitalPolDir", order="8", type="string")
     */
    protected $digitalPolegarDireito;

    /**
     * Digital do polegar esquerdo.
     *
     * @Field(name="IDigitalPolEsq", order="9", type="string")
     */
    protected $digitalPolegarEsquerdo;

    /**
     * Digital do indicador direito.
     *
     * @Field(name="iDigitalIndDir", order="10", type="string")
     */
    protected $digitalIndicadorDireito;

    /**
     * Digital do indicador esquerdo.
     *
     * @Field(name="iDigitalIndEsq", order="11", type="string")
     */
    protected $digitalIndicadorEsquerdo;
}
