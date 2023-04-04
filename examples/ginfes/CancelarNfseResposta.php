<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\CancelarNfseResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->cancelamento = new stdClass();
$std->cancelamento->confirmacao = new stdClass();
$std->cancelamento->confirmacao->Id = '001';
$std->cancelamento->confirmacao->pedido = new stdClass();
$std->cancelamento->confirmacao->pedido->infpedidocancelamento = new stdClass();
$std->cancelamento->confirmacao->pedido->infpedidocancelamento->Id = '001';
$std->cancelamento->confirmacao->pedido->infpedidocancelamento->CodigoCancelamento = '1';
$std->cancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse = new stdClass();
$std->cancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->numero = '121234';
$std->cancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->cpfcnpj = '12345678901234';
$std->cancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->inscricaomunicipal = '12345678';
$std->cancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->codigomunicipio = '1234567';
$std->cancelamento->confirmacao->InfConfirmacaoCancelamento = new stdClass();
$std->cancelamento->confirmacao->InfConfirmacaoCancelamento->Sucesso = true;
$std->cancelamento->confirmacao->InfConfirmacaoCancelamento->DataHora = date('Y-m-d\TH:i:s');


//$std->retcancelamento = new stdClass();
//$std->retcancelamento->nfsecancelamento = new stdClass();
//$std->retcancelamento->nfsecancelamento->versao = '2.03';
//$std->retcancelamento->nfsecancelamento->confirmacao = new stdClass();
//$std->retcancelamento->nfsecancelamento->confirmacao->Id = '001';
//$std->retcancelamento->nfsecancelamento->confirmacao->datahora = date('Y-m-d\TH:i:s');
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido = new stdClass();
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento = new stdClass();
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->Id = '001';
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->CodigoCancelamento = '1';
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse = new stdClass();
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->numero = '121234';
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->cpfcnpj = '12345678901234';
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->inscricaomunicipal = '12345678';
//$std->retcancelamento->nfsecancelamento->confirmacao->pedido->infpedidocancelamento->IdentificacaoNfse->codigomunicipio = '1234567';

header("Content-type: text/xml");
$class = new CancelarNfseResposta();
$class->save($std, 'examples/ginfes/xml', 'CancelarNfseResposta');