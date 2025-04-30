<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\FactoryGinfes;
use Ativasolucoestecnologicas\Nfse\Common\InitGinfes as Init;

class CancelarNfseResposta extends Init
{
    public function __construct()
    {
        parent::__construct(FactoryGinfes::CANCELA_NFSE_RESPOSTA);
    }
}