<?php

namespace Ativasolucoestecnologicas\Nfse;

use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;

class EnviarLoteRpsSincronoResposta
{
    public static function render(\stdClass $std = null)
    {
        return Factory::render(self::init($std), Factory::ENVIO_LOTE_RPS_SINCRONO_RESPOSTA)->toXml();
    }

    public static function save(\stdClass $std = null, $path = '/')
    {
        return Factory::render(self::init($std), Factory::ENVIO_LOTE_RPS_SINCRONO_RESPOSTA)->save($path);
    }

    private static function init(\stdClass $std = null)
    {
        if (!empty($std)) {
            return Helpers::propertiesToLower($std);
        }
        return null;
    }
}