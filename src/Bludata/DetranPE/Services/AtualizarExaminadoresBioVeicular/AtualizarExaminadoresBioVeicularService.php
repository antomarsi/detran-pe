<?php

namespace Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular;

use Bludata\DetranPE\Services\Service;

class AtualizarExaminadoresBioVeicularService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'AtualizarExaminadoresBioVeicular';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AtualizarExaminadoresBioVeicular\DTO\AtualizarExaminadoresBioVeicularParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\ErroDTO';
    }
}
