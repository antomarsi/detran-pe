<?php

namespace Bludata\DetranPE\Services\AtualizarAgendamentoBioVeicular;

use Bludata\DetranPE\Services\Service;

class AtualizarAgendamentoBioVeicularService extends Service
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'AtualizarAgendamentoBioVeicular';
    }

    /**
     * {@inheritdoc}
     */
    public function getParamDTOName()
    {
        return 'Bludata\DetranPE\Services\AutenticaCliente\DTO\AtualizarAgendamentoBioVeicularParamDTO';
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseDTOName()
    {
        return 'Bludata\DetranPE\DTO\TextDTO';
    }
}