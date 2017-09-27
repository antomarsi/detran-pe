<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularS;

use Bludata\DetranPE\Services\Service;

class ExaminadoresBioVeicularSService extends Service
{
    /**
     * @{inheritDoc}
     */
    public function getName()
    {
        return 'ExaminadoresBioVeicularS';
    }

    /**
     * @{inheritDoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\ExaminadoresBioVeicularS\DTO\ExaminadoresBioVeicularSParamDTO';
    }

    /**
     * @{inheritDoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\ExaminadoresBioVeicularS\DTO\ExaminadoresBioVeicularSResponseDTO';
    }
}
