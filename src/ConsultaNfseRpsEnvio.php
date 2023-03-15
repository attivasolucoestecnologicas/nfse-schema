<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class ConsultaNfseRpsEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::CONSULTA_NFSE_RPS_ENVIO);
    }
}