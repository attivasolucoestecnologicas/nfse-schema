<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\FactoryGinfes;
use Ativasolucoestecnologicas\Nfse\Common\InitGinfes as Init;

class EnviarLoteRpsSincronoEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(FactoryGinfes::ENVIO_LOTE_RPS_SINCRONO_ENVIO);
    }
}