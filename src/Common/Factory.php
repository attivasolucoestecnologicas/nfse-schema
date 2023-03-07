<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Factories\Rps;

class Factory
{
    const NFSE = 'nfse';
    const RPS = 'rps';

    protected $type;

    public static function render($std, $type)
    {
        switch ($type) {
            case self::NFSE;
                return self::NFSE;
            case self::RPS;
                return new Rps($std);
            default:
                return '';
        }
    }
}