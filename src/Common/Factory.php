<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Factories\EnviarLoteRpsResposta;
use Ativasolucoestecnologicas\Nfse\Factories\Nfse;
use Ativasolucoestecnologicas\Nfse\Factories\Rps;

class Factory
{
    const NFSE = 'nfse';
    const RPS = 'rps';
    const ENVIO_LOTE_RPS_RESPOSTA = 'EnviarLoteRpsResposta';

    public static function render($std, $type)
    {
        switch ($type) {
            case self::NFSE;
                return new Nfse($std);
            case self::RPS;
                return new Rps($std);
            case self::ENVIO_LOTE_RPS_RESPOSTA :
                return new EnviarLoteRpsResposta($std);
            default:
                return '';
        }
    }
}