<?php

use Ativasolucoestecnologicas\Nfse\CancelarNfseResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->retcancelamento = new stdClass();
$std->retcancelamento->nfsecancelamento = new stdClass();
$std->retcancelamento->nfsecancelamento->versao = '2.03';
$std->retcancelamento->nfsecancelamento->confirmacao = new stdClass();
$std->retcancelamento->nfsecancelamento->confirmacao->Id = '001';
$std->retcancelamento->nfsecancelamento->confirmacao->datahora = date('Y-m-d\TH:i:s');
$std->retcancelamento->nfsecancelamento->confirmacao->pedido = new stdClass();
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento = new stdClass();
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->Id = '001';
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->CodigoCancelamento = '1';
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse = new stdClass();
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->numero = '121234';
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->cpfcnpj = '12345678901234';
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->inscricaomunicipal = '12345678';
$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->codigomunicipio = '1234567';

header("Content-type: text/xml");
$class = new CancelarNfseResposta();
$class->save($std, 'examples/xml/abrasf', 'CancelarNfseResposta');