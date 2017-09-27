<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularS;

use Bludata\DetranPE\Services\Service;

class ExaminadoresBioVeicularSService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ExaminadoresBioVeicularS';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\ExaminadoresBioVeicularS\DTO\ExaminadoresBioVeicularSParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\ExaminadoresBioVeicularS\DTO\ExaminadoresBioVeicularSResponseDTO';
    }
}
