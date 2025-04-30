<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Abrasf;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class EnviarLoteRpsSincronoEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::ENVIO_LOTE_RPS_SINCRONO_ENVIO);
    }
}