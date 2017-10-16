<?php

namespace Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa;

use Bludata\DetranPE\Services\Service;

class ConsultarAgendamentoBioVeicularEmpresaService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ConsultarAgendamentoBioVeicularEmpresa';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO\ConsultarAgendamentoBioVeicularEmpresaParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicularEmpresa\DTO\ConsultarAgendamentoBioVeicularEmpresaResponseDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'GET';
    }
}
