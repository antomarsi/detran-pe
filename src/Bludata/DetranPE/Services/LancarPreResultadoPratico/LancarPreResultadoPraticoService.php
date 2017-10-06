<?php

namespace Bludata\DetranPE\Services\LancarPreResultadoPratico;

use Bludata\DetranPE\Services\Service;

class LancarPreResultadoPraticoService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'LancarPreResultadoPratico';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\LancarPreResultadoPratico\DTO\LancarPreResultadoPraticoParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\ErroDTO';
    }
}
