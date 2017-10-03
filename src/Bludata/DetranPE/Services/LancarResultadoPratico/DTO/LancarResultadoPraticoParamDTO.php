<?php

namespace Bludata\DetranPE\Services\LancarResultadoPratico\DTO;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="LancarResultadoPratico")
 */
final class LancarResultadoPraticoParamDTO extends DTO
{
    /**
     * Número do processo do candidato.
     *
     * @Field(name="nProcess")
     */
    protected $numeroProcesso;

    /**
     * Categoria pretendida pelo candidato.
     *
     * @Field(name="sCategoriaCnh")
     */
    protected $categoria;

    /**
     * Tipo de resultado.
     *
     * @Field(name="nTipoResultado")
     */
    protected $resultado;

    /**
     * Data do resultado.
     *
     * @Field(name="dResultado")
     */
    protected $dataResultado;

    /**
     * Código do examinador.
     *
     * @Field(name="nExaminador")
     */
    protected $examinador;

    /**
     * Identificador de desistência do condutor.
     *
     * @Field(name="iDesistencia")
     */
    protected $desistencia;

    /**
     * Código do ponto de atendimento da realização do exame prático.
     *
     * @Field(name="nPontoAtendimento")
     */
    protected $pontoAtendimento;

    /**
     * Código do examinador da rampa.
     *
     * @Field(name="nExaminadorRampa")
     */
    protected $examinadorRampa;

    /**
     * Tipo de resultado do exame da rampa.
     *
     * @Field(name="nTipoResultadoRampa")
     */
    protected $resultadoRampa;

    /**
     * Código do examinador da garagem.
     *
     * @Field(name="nExamindorGaragem")
     */
    protected $examinadorGaragem;

    /**
     * Tipo de resultado do exame da garagem.
     *
     * @Field(name="nTipoResultadoGaragem")
     */
    protected $resultadoGaragem;

    /**
     * Código do examinador da baliza.
     *
     * @Field(name="nExamindorBaliza")
     */
    protected $examinadorBaliza;

    /**
     * Tipo de resultado do exame da baliza.
     *
     * @Field(name="nTipoResultadoBaliza")
     */
    protected $resultadoBaliza;

    /**
     * Código do examinador da rua.
     *
     * @Field(name="nExamindorRua")
     */
    protected $examinadorRua;

    /**
     * Tipo de resultado do exame da rua.
     *
     * @Field(name="nTipoResultadoRua")
     */
    protected $resultadoRua;
}
