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
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\ConsultarAgendamentoBioVeicularEmpresaParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\ConsultarAgendamentoBioVeicularEmpresaResponseDTO';
    }
}
