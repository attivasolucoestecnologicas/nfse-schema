<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class EnviarLoteRpsSincronoResposta extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::ENVIO_LOTE_RPS_SINCRONO_RESPOSTA);
    }
}