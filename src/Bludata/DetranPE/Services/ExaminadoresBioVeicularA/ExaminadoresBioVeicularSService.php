<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularA;

use Bludata\DetranPE\Services\Service;

class ExaminadoresBioVeicularSService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ExaminadoresBioVeicularA';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\ExaminadoresBioVeicularA\DTO\ExaminadoresBioVeicularAParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\ErroDTO';
    }
}
