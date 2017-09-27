<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularA;

use Bludata\DetranPE\Services\Service;

class ExaminadoresBioVeicularAService extends Service
{
    /**
     * @{inheritDoc}
     */
    public function getName()
    {
        return 'ExaminadoresBioVeicularA';
    }

    /**
     * @{inheritDoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\ExaminadoresBioVeicularA\DTO\ExaminadoresBioVeicularAParamDTO';
    }

    /**
     * @{inheritDoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\ErroDTO';
    }
}
