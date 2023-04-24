<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Abrasf;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;
use stdClass;

class Rps extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::RPS);
    }
}