<?php

namespace Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="ConsultarAgendamentoBioVeicularEmpresa")
 */
final class ConsultarAgendamentoBioVeicularEmpresaResponseDTO extends DTO
{
    /**
     * Número de renach do candidato.
     *
     * @Field(name="sFormularioRenach")
     */
    protected $renach;

    /**
     * Número do processo do candidato.
     *
     * @Field(name="nProcess")
     */
    protected $numeroProcesso;

    /**
     * Número de cpf do candidato.
     *
     * @Field(name="nCpf")
     */
    protected $cpf;

    /**
     * Nome do candidato.
     *
     * @Field(name="sNome")
     */
    protected $nome;

    /**
     * Data do agendamento.
     *
     * @Field(name="dDisponibilidade")
     */
    protected $disponibilidade;

    /**
     * Categoria pretendida pelo candidato.
     *
     * @Field(name="sCategoriaCnh")
     */
    protected $categoria;

    /**
     * Status atual do agendamento, "I" = Inserindo, "C" = Cancelando.
     *
     * @Field(name="sStatusAgend")
     */
    protected $status;

    /**
     * Foto do candidato.
     *
     * @Field(name="iFoto")
     */
    protected $foto;

    /**
     * Digital do polegar direito.
     *
     * @Field(name="iDigitalPolDir")
     */
    protected $digitalPolegarDireito;

    /**
     * Digital do polegar esquerdo.
     *
     * @Field(name="IDigitalPolEsq")
     */
    protected $digitalPolegarEsquerdo;

    /**
     * Digital do indicador direito.
     *
     * @Field(name="iDigitalIndDir")
     */
    protected $digitalIndicadorDireito;

    /**
     * Digital do indicador esquerdo.
     *
     * @Field(name="iDigitalIndEsq")
     */
    protected $digitalIndicadorEsquerdo;
}
