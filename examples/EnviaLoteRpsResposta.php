<?php

use Ativasolucoestecnologicas\Nfse\EnviaLoteRpsResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../vendor/autoload.php';

$std = new stdClass;
$std->NumeroLote = '001';
$std->Protocolo = '001';
$std->DataRecebimento = date('Y-m-d\TH:i:s');
$std->ListaMensagemRetorno = new stdClass();
$std->ListaMensagemRetorno->MensagemRetorno = (object)[];

$mensagemRetorno = new stdClass();
$mensagemRetorno->Codigo = '001';
$mensagemRetorno->Mensagem = '002';
$mensagemRetorno->Correcao = '003';

$std->ListaMensagemRetorno->MensagemRetorno->{1} = $mensagemRetorno;
$std->ListaMensagemRetorno->MensagemRetorno->{2} = $mensagemRetorno;

header("Content-type: text/xml");
$class = new EnviaLoteRpsResposta;
$class->save($std, 'examples/xml', 'EnviaLoteRpsResposta');