<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;
use stdClass;

class Rps
{
    public static function render(stdClass $rps = null)
    {
        return Factory::render(self::init($rps), Factory::RPS)->toXml();
    }

    private static function init(stdClass $rps = null)
    {
        if (!empty($rps)) {
            return Helpers::propertiesToLower($rps);
        }
        return null;
    }
}