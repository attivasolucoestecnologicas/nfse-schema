<?php

namespace Ativasolucoestecnologicas\Nfse\Renders\Abrasf;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;
use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;
use stdClass;

class Nfse extends Init
{
    public function __construct()
    {
        parent::__construct(Factory::NFSE);
    }
}