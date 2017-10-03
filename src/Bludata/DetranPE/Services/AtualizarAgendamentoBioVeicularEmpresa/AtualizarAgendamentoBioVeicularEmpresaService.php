<?php

namespace Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicularEmpresa;

use Bludata\DetranPE\Services\Service;

class AtualizarAgendamentoBioVeicularEmpresaService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'AtualizarAgendamentoBioVeicularEmpresa';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AtualizarAgendamentoBioVeicularEmpresaParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\TextDTO';
    }
}
