<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

//use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Nfse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\CancelarNfse as CancelarNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaLoteRps as ConsultaLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaNfse as ConsultaNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaNfseFaixa as ConsultaNfseFaixaRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaNfseRps as ConsultaNfseRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaNfseServicoPrestado as ConsultaNfseServicoPrestadoRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaNfseServicoTomado as ConsultaNfseServicoTomadoRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\EnviarLoteRps as EnviarLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\EnviarLoteRpsSincrono as EnviarLoteRpsSincronoRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\GerarNfse as GerarNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\SubstituirNfse as SubstituirNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\CancelarNfse as CancelarNfseResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaLoteRps as ConsultaLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaNfse as ConsultaNfseResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaNfseFaixa as ConsultaNfseFaixaResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaNfseRps as ConsultaNfseRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaNfseServicoPrestado as ConsultaNfseServicoPrestadoResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaNfseServicoTomado as ConsultaNfseServicoTomadoResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\EnviarLoteRps as EnviarLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\EnviarLoteRpsSincrono as EnviarLoteRpsSincronoResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\SubstituirNfse as SubstituirNfseResponse;

//use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Rps;

class FactoryGinfes
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
    const CONSULTA_NFSE_ENVIO = 'ConsultarNfseEnvio';
    const CONSULTA_NFSE_RPS_RESPOSTA = 'ConsultarNfseRpsResposta';
    const CONSULTA_NFSE_RESPOSTA = 'ConsultarNfseResposta';
    const CONSULTA_NFSE_SERVICO_PRESTADO_ENVIO = 'ConsultaNfseServicoPrestadoRequest';
    const CONSULTA_NFSE_SERVICO_PRESTADO_RESPOSTA = 'ConsultaNfseServicoPrestadoResponse';
    const CONSULTA_NFSE_SERVICO_TOMADO_ENVIO = 'ConsultaNfseServicoTomadoRequest';
    const CONSULTA_NFSE_SERVICO_TOMADO_RESPOSTA = 'ConsultaNfseServicoTomadoResponse';
    const CONSULTA_NFSE_FAIXA_ENVIO = 'ConsultaNfseFaixaRequest';
    const CONSULTA_NFSE_FAIXA_RESPOSTA = 'ConsultaNfseFaixaResponse';

    public function render($std, $type)
    {
        switch ($type) {
            case self::NFSE;
//                return new Nfse($std);
            case self::RPS;
//                return new Rps($std);
            case self::ENVIO_LOTE_RPS_ENVIO :
                return new EnviarLoteRpsRequest($std);
            case self::CONSULTA_NFSE_ENVIO :
                return new ConsultaNfseRequest($std);
            case self::CONSULTA_NFSE_RESPOSTA :
                return new ConsultaNfseResponse($std);
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
            case self::CONSULTA_NFSE_SERVICO_TOMADO_ENVIO :
                return new ConsultaNfseServicoTomadoRequest($std);
            case self::CONSULTA_NFSE_SERVICO_TOMADO_RESPOSTA :
                return new ConsultaNfseServicoTomadoResponse($std);
            case self::CONSULTA_NFSE_FAIXA_ENVIO :
                return new ConsultaNfseFaixaRequest($std);
            case self::CONSULTA_NFSE_FAIXA_RESPOSTA :
                return new ConsultaNfseFaixaResponse($std);
            default:
                return null;
        }
    }
}