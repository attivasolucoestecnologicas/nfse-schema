<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\FactoryGinfes;
use Ativasolucoestecnologicas\Nfse\Common\InitGinfes as Init;
use stdClass;

class Rps extends Init
{
    public function __construct()
    {
        parent::__construct(FactoryGinfes::RPS);
    }
}