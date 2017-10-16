<?php

namespace Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular;

use Bludata\DetranPE\Services\Service;

class ConsultarAgendamentoBioVeicularService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ConsultarAgendamentoBioVeicular';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\ConsultarAgendamentoBioVeicularParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\ConsultarAgendamentoBioVeicularResponseDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'GET';
    }
}
