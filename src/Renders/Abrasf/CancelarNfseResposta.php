<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Abrasf;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class CancelarNfseResposta extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::CANCELA_NFSE_RESPOSTA);
    }
}