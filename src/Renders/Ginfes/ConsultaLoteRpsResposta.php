<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\FactoryGinfes;
use Ativasolucoestecnologicas\Nfse\Common\InitGinfes as Init;

class ConsultaLoteRpsResposta extends Init
{
    public function __construct()
    {
        parent::__construct(FactoryGinfes::CONSULTA_LOTE_RPS_RESPOSTA);
    }
}