<?php


namespace Ativasolucoestecnologicas\Nfse;


use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;
use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;

class EnviarLoteRpsSincronoEnvio extends Init
{
    public static function render(\stdClass $std = null)
    {
        return Factory::render(self::init($std), Factory::ENVIO_LOTE_RPS_SINCRONO_ENVIO)->toXml();
    }

    public static function save(\stdClass $std = null, $path = '/')
    {
        return Factory::render(self::init($std), Factory::ENVIO_LOTE_RPS_SINCRONO_ENVIO)->save($path);
    }
}