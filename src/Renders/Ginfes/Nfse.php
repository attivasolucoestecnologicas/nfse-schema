<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\FactoryGinfes;
use Ativasolucoestecnologicas\Nfse\Common\InitGinfes as Init;
use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;
use stdClass;

class Nfse extends Init
{
    public function __construct()
    {
        parent::__construct(FactoryGinfes::NFSE);
    }
}