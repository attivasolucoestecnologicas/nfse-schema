<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class ConsultaNfseFaixaEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::CONSULTA_NFSE_FAIXA_ENVIO);
    }
}