<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class EnviarLoteRpsEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::ENVIO_LOTE_RPS_ENVIO);
    }
}