<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\CancelarNfse as CancelarNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaLoteRps as ConsultaLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaNfse as ConsultaNfseRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaNfseRps as ConsultaNfseRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\EnviarLoteRps as EnviarLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request\ConsultaSituacaoLoteRps as ConsultaSituacaoLoteRpsRequest;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\CancelarNfse as CancelarNfseResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaLoteRps as ConsultaLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaNfse as ConsultaNfseResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaNfseRps as ConsultaNfseRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\EnviarLoteRps as EnviarLoteRpsResponse;
use Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response\ConsultaSituacaoLoteRps as ConsultaSituacaoLoteRpsResponse;

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
    const CONSULTA_SITUACAO_LOTE_RPS_ENVIO = 'ConsultaSituacaoLoteRpsRequest';
    const CONSULTA_SITUACAO_LOTE_RPS_RESPOSTA = 'ConsultaSituacaoLoteRpsResponse';

    public function render($std, $type)
    {
        switch ($type) {
            case self::ENVIO_LOTE_RPS_ENVIO :
                return new EnviarLoteRpsRequest($std);
            case self::CONSULTA_SITUACAO_LOTE_RPS_ENVIO :
                return new ConsultaSituacaoLoteRpsRequest($std);
            case self::CONSULTA_SITUACAO_LOTE_RPS_RESPOSTA :
                return new ConsultaSituacaoLoteRpsResponse($std);
            case self::CONSULTA_NFSE_ENVIO :
                return new ConsultaNfseRequest($std);
            case self::CONSULTA_NFSE_RESPOSTA :
                return new ConsultaNfseResponse($std);
            case self::ENVIO_LOTE_RPS_RESPOSTA :
                return new EnviarLoteRpsResponse($std);
            case self::CANCELA_NFSE_ENVIO :
                return new CancelarNfseRequest($std);
            case self::CANCELA_NFSE_RESPOSTA :
                return new CancelarNfseResponse($std);
            case self::CONSULTA_LOTE_RPS_ENVIO :
                return new ConsultaLoteRpsRequest($std);
            case self::CONSULTA_LOTE_RPS_RESPOSTA :
                return new ConsultaLoteRpsResponse($std);
            case self::CONSULTA_NFSE_RPS_ENVIO :
                return new ConsultaNfseRpsRequest($std);
            case self::CONSULTA_NFSE_RPS_RESPOSTA :
                return new ConsultaNfseRpsResponse($std);
            default:
                return null;
        }
    }
}