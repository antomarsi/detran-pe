<?php

namespace Bludata\DetranPE\Services\ConsultarAgendamentoBioVeicular;

use Bludata\DetranPE\Services\Service;

class ConsultarAgendamentoBioVeicularService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ConsultarAgendamentoBioVeicular';
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
