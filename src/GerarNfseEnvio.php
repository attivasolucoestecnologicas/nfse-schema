<?php


namespace Ativasolucoestecnologicas\Nfse;


use Ativasolucoestecnologicas\Nfse\Common\Factory;
use Ativasolucoestecnologicas\Nfse\Common\Init;
use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;

class GerarNfseEnvio extends Init
{
    public static function render(\stdClass $std = null)
    {
        return Factory::render(self::init($std), Factory::GERA_NFSE_ENVIO)->toXml();
    }

    public static function save(\stdClass $std = null, $path = '/')
    {
        return Factory::render(self::init($std), Factory::GERA_NFSE_ENVIO)->save($path);
    }
}