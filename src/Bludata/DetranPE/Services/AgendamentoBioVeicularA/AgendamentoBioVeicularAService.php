<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularA;

use Bludata\DetranPE\Services\Service;

class AgendamentoBioVeicularAService extends Service
{
    /**
     * @{inheritDoc}
     */
    public function getName()
    {
        return 'AgendamentoBioVeicularA';
    }

    /**
     * @{inheritDoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AgendamentoBioVeicularAParamDTO';
    }

    /**
     * @{inheritDoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\TextDTO';
    }
}
