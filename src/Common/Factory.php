<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Factories\Nfse;
use Ativasolucoestecnologicas\Nfse\Factories\Request\CancelarNfse as CancelarNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\ConsultaLoteRps as ConsultaLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\ConsultaNfseRps as ConsultaNfseRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\ConsultaNfseServicoPrestado as ConsultaNfseServicoPrestadoRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\EnviarLoteRps as EnviarLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\EnviarLoteRpsSincrono as EnviarLoteRpsSincronoRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\GerarNfse as GerarNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Request\SubstituirNfse as SubstituirNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Response\CancelarNfse as CancelarNfseResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Response\ConsultaLoteRps as ConsultaLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Response\ConsultaNfseRps as ConsultaNfseRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Response\ConsultaNfseServicoPrestado as ConsultaNfseServicoPrestadoResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Response\EnviarLoteRps as EnviarLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Response\EnviarLoteRpsSincrono as EnviarLoteRpsSincronoResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Response\SubstituirNfse as SubstituirNfseResponse;
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
    const CANCELA_NFSE_RESPOSTA = 'CancelarNfseResposta';
    const SUBSTITUIR_NFSE_ENVIO = 'SubstituirNfseRequest';
    const SUBSTITUIR_NFSE_RESPOSTA = 'SubstituirNfseResponse';
    const CONSULTA_LOTE_RPS_ENVIO = 'ConsultarLoteRpsEnvio';
    const CONSULTA_LOTE_RPS_RESPOSTA = 'ConsultarLoteRpsResposta';
    const CONSULTA_NFSE_RPS_ENVIO = 'ConsultarNfseRpsEnvio';
    const CONSULTA_NFSE_RPS_RESPOSTA = 'ConsultarNfseRpsResposta';
    const CONSULTA_NFSE_SERVICO_PRESTADO_ENVIO = 'ConsultaNfseServicoPrestadoRequest';
    const CONSULTA_NFSE_SERVICO_PRESTADO_RESPOSTA = 'ConsultaNfseServicoPrestadoResponse';

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
            case self::CANCELA_NFSE_RESPOSTA :
                return new CancelarNfseResponse($std);
            case self::SUBSTITUIR_NFSE_ENVIO :
                return new SubstituirNfseRequest($std);
            case self::SUBSTITUIR_NFSE_RESPOSTA :
                return new SubstituirNfseResponse($std);
            case self::CONSULTA_LOTE_RPS_ENVIO :
                return new ConsultaLoteRpsRequest($std);
            case self::CONSULTA_LOTE_RPS_RESPOSTA :
                return new ConsultaLoteRpsResponse($std);
            case self::CONSULTA_NFSE_RPS_ENVIO :
                return new ConsultaNfseRpsRequest($std);
            case self::CONSULTA_NFSE_RPS_RESPOSTA :
                return new ConsultaNfseRpsResponse($std);
            case self::CONSULTA_NFSE_SERVICO_PRESTADO_ENVIO :
                return new ConsultaNfseServicoPrestadoRequest($std);
            case self::CONSULTA_NFSE_SERVICO_PRESTADO_RESPOSTA :
                return new ConsultaNfseServicoPrestadoResponse($std);
            default:
                return null;
        }
    }
}