<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Factories\Nfse;
use Ativasolucoestecnologicas\Nfse\Factories\Request\CancelarNfse as CancelarNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\EnviarLoteRps as EnviarLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\EnviarLoteRpsSincrono as EnviarLoteRpsSincronoRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\GerarNfse as GerarNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Response\EnviarLoteRps as EnviarLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Response\EnviarLoteRpsSincrono as EnviarLoteRpsSincronoResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Rps;

class Factory
{
    const NFSE = 'nfse';
    const RPS = 'rps';
    const ENVIO_LOTE_RPS_ENVIO = 'EnviarLoteRpsEnvio';
    const ENVIO_LOTE_RPS_SINCRONO_ENVIO = 'EnviarLoteRpsSincronoEnvio';
    const ENVIO_LOTE_RPS_RESPOSTA = 'EnviarLoteRpsResposta';
    const ENVIO_LOTE_RPS_SINCRONO_RESPOSTA = 'EnviarLoteRpsSincronoResposta';
    const GERA_NFSE_ENVIO = 'GerarNfseEnvio';
    const GERA_NFSE_RESPOSTA = 'GerarNfseResposta';
    const CANCELA_NFSE_ENVIO = 'CancelarNfseEnvio';

    public function render($std, $type)
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
            case self::ENVIO_LOTE_RPS_SINCRONO_RESPOSTA :
                return new EnviarLoteRpsSincronoResponse($std);
            case self::GERA_NFSE_ENVIO :
                return new GerarNfseRequest($std);
            case self::CANCELA_NFSE_ENVIO :
                return new CancelarNfseRequest($std);
            default:
                return null;
        }
    }
}