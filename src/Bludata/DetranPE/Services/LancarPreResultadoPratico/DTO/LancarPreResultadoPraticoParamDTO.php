<?php

namespace Bludata\DetranPE\Services\LancarPreResultadoPratico\DTO;

use Bludata\Common\Annotations\JSON\Entity;
use Bludata\Common\Annotations\JSON\Field;
use Bludata\DetranPE\DTO\DTO;

/**
 * @Entity(name="LancarPreResultadoPratico")
 */
final class LancarPreResultadoPraticoParamDTO extends DTO
{
    /**
     * Número do processo do candidato.
     *
     * @Field(name="nProcess", order=0, type="integer")
     */
    protected $numeroProcesso;

    /**
     * Categoria pretendida pelo candidato.
     *
     * @Field(name="sCategoriaCnh", order=1, type="string")
     */
    protected $categoria;

    /**
     * Tipo de resultado.
     *
     * @Field(name="nTipoResultado", order=2, type="integer")
     */
    protected $resultado;

    /**
     * Data do resultado.
     *
     * @Field(name="dResultado", order=3, type="datetime")
     */
    protected $dataResultado;

    /**
     * Código do examinador.
     *
     * @Field(name="nExaminador", order=4, type="integer")
     */
    protected $examinador;

    /**
     * Identificador de desistência do condutor.
     *
     * @Field(name="iDesistencia", order=5, type="boolean")
     */
    protected $desistencia;

    /**
     * Código do ponto de atendimento da realização do exame prático.
     *
     * @Field(name="nPontoAtendimento", order=6, type="integer")
     */
    protected $pontoAtendimento;

    /**
     * Código do examinador da rampa.
     *
     * @Field(name="nExaminadorRampa", order=7, type="integer")
     */
    protected $examinadorRampa;

    /**
     * Tipo de resultado do exame da rampa.
     *
     * @Field(name="nTipoResultadoRampa", order=8, type="integer")
     */
    protected $resultadoRampa;

    /**
     * Código do examinador da garagem.
     *
     * @Field(name="nExamindorGaragem", order=9, type="integer")
     */
    protected $examinadorGaragem;

    /**
     * Tipo de resultado do exame da garagem.
     *
     * @Field(name="nTipoResultadoGaragem", order=10, type="integer")
     */
    protected $resultadoGaragem;

    /**
     * Código do examinador da baliza.
     *
     * @Field(name="nExamindorBaliza", order=11, type="integer")
     */
    protected $examinadorBaliza;

    /**
     * Tipo de resultado do exame da baliza.
     *
     * @Field(name="nTipoResultadoBaliza", order=12, type="integer")
     */
    protected $resultadoBaliza;

    /**
     * Código do examinador da rua.
     *
     * @Field(name="nExamindorRua", order=13, type="integer")
     */
    protected $examinadorRua;

    /**
     * Tipo de resultado do exame da rua.
     *
     * @Field(name="nTipoResultadoRua", order=14, type="integer")
     */
    protected $resultadoRua;
}
