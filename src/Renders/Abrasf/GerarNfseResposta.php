<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Abrasf;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class GerarNfseResposta extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::GERA_NFSE_RESPOSTA);
    }
}