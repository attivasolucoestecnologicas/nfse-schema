<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class ConsultaNfseServicoTomadoResposta extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::CONSULTA_NFSE_SERVICO_TOMADO_RESPOSTA);
    }
}