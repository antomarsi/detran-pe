<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularS;

use Bludata\DetranPE\Services\Service;

class AgendamentoBioVeicularSService extends Service
{
    /**
     * @{inheritDoc}
     */
    public function getName()
    {
        return 'AgendamentoBioVeicularS';
    }

    /**
     * @{inheritDoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AgendamentoBioVeicularSParamDTO';
    }

    /**
     * @{inheritDoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AgendamentoBioVeicularSResponseDTO';
    }
}
