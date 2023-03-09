<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;
use stdClass;

class Rps
{
    public static function render(stdClass $std = null)
    {
        return Factory::render(self::init($std), Factory::RPS)->toXml();
    }

    public static function save(stdClass $std = null, $path = '/')
    {
        return Factory::render(self::init($std), Factory::RPS)->save($path);
    }

    private static function init(stdClass $std = null)
    {
        if (!empty($std)) {
            return Helpers::propertiesToLower($std);
        }
        return null;
    }
}