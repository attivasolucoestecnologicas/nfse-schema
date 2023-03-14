<?php


namespace Ativasolucoestecnologicas\Nfse\Common;


use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;

class Init
{
    protected static function init(\stdClass $std = null)
    {
        if (!empty($std)) {
            return Helpers::propertiesToLower($std);
        }
        return null;
    }
}