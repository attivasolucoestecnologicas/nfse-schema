<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\FactoryGinfes;
use Ativasolucoestecnologicas\Nfse\Common\InitGinfes as Init;

class EnviarLoteRpsEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(FactoryGinfes::ENVIO_LOTE_RPS_ENVIO);
    }
}