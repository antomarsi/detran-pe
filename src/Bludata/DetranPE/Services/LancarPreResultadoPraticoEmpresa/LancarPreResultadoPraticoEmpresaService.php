<?php

namespace Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa;

use Bludata\DetranPE\Services\Service;

class LancarPreResultadoPraticoEmpresaService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'LancarPreResultadoPraticoEmpresa';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\LancarPreResultadoPraticoEmpresa\DTO\LancarPreResultadoPraticoEmpresaParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\ErroDTO';
    }
}
