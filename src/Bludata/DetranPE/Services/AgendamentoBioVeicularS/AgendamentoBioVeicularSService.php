<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularS;

use Bludata\DetranPE\Services\Service;

class AgendamentoBioVeicularSService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'AgendamentoBioVeicularS';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AgendamentoBioVeicularSParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AgendamentoBioVeicularSResponseDTO';
    }
}
