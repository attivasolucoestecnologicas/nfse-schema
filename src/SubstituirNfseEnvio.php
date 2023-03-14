<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;

class SubstituirNfseEnvio extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::SUBSTITUIR_NFSE_ENVIO);
    }
}