<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularA;

use Bludata\DetranPE\Services\Service;

class AgendamentoBioVeicularAService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'AgendamentoBioVeicularA';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AgendamentoBioVeicularAParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\TextDTO';
    }
}
