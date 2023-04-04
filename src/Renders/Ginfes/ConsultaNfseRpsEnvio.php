<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\FactoryGinfes;
use Ativasolucoestecnologicas\Nfse\Common\InitGinfes as Init;

class ConsultaNfseRpsEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(FactoryGinfes::CONSULTA_NFSE_RPS_ENVIO);
    }
}