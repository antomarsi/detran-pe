<?php

namespace Bludata\DetranPE\Services\AgendamentoBioVeicularS;

use Bludata\DetranPE\Services\Service;

class LancarResultadoPraticoService extends Service
{
    /**
     * @{inheritDoc}
     */
    public function getName()
    {
        return 'LancarResultadoPratico';
    }

    /**
     * @{inheritDoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\LancarResultadoPratico\DTO\LancarResultadoPraticoParamDTO';
    }

    /**
     * @{inheritDoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\ErroDTO;
    }
}
