<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\CancelarNfseEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();
$std->pedido = new stdClass();
$std->pedido->infpedidocancelamento = new stdClass();
$std->pedido->infpedidocancelamento->Id = '001';
$std->pedido->infpedidocancelamento->CodigoCancelamento = '1';
$std->pedido->infpedidocancelamento->IdentificacaoNfse = new stdClass();
$std->pedido->infpedidocancelamento->IdentificacaoNfse->numero = '121234';
$std->pedido->infpedidocancelamento->IdentificacaoNfse->cpfcnpj = '12345678901234';
$std->pedido->infpedidocancelamento->IdentificacaoNfse->inscricaomunicipal = '12345678';
$std->pedido->infpedidocancelamento->IdentificacaoNfse->codigomunicipio = '1234567';
header("Content-type: text/xml");
$class = new CancelarNfseEnvio();
$class->save($std, 'examples/xml/ginfes', 'CancelarNfseEnvio');