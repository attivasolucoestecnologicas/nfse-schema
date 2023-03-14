<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class EnviaLoteRpsResposta extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::ENVIO_LOTE_RPS_RESPOSTA);
    }
}