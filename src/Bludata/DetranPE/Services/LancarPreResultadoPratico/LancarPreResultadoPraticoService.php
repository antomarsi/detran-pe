<?php

namespace Bludata\DetranPE\Services\LancarPreResultadoPratico;

use Bludata\DetranPE\Services\Service;

class LancarPreResultadoPraticoService extends Service
{
    /**
     * @{inheritDoc}
     */
    public function getName()
    {
        return 'LancarPreResultadoPratico';
    }

    /**
     * @{inheritDoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\LancarPreResultadoPratico\DTO\LancarPreResultadoPraticoParamDTO';
    }

    /**
     * @{inheritDoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\ErroDTO';
    }
}
