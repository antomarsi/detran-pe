<?php

namespace Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular;

use Bludata\DetranPE\Services\Service;

class ConsultarExaminadoresBioVeicularService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ConsultarExaminadoresBioVeicular';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO\ConsultarExaminadoresBioVeicularParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\ConsultarExaminadoresBioVeicular\DTO\ConsultarExaminadoresBioVeicularResponseDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'GET';
    }
}
