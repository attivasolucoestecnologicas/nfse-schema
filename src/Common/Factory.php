<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Factories\Nfse;
use Ativasolucoestecnologicas\Nfse\Factories\Request\EnviarLoteRps as EnviarLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\EnviarLoteRpsSincrono as EnviarLoteRpsSincronoRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Response\EnviarLoteRps as EnviarLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Rps;

class Factory
{
    const NFSE = 'nfse';
    const RPS = 'rps';
    const ENVIO_LOTE_RPS_ENVIO = 'EnviarLoteRpsEnvio';
    const ENVIO_LOTE_RPS_SINCRONO_ENVIO = 'EnviarLoteRpsSincronoEnvio';
    const ENVIO_LOTE_RPS_RESPOSTA = 'EnviarLoteRpsResposta';

    public static function render($std, $type)
    {
        switch ($type) {
            case self::NFSE;
                return new Nfse($std);
            case self::RPS;
                return new Rps($std);
            case self::ENVIO_LOTE_RPS_ENVIO :
                return new EnviarLoteRpsRequest($std);
            case self::ENVIO_LOTE_RPS_RESPOSTA :
                return new EnviarLoteRpsResponse($std);
            case self::ENVIO_LOTE_RPS_SINCRONO_ENVIO :
                return new EnviarLoteRpsSincronoRequest($std);
            default:
                return '';
        }
    }
}