<?php

use Ativasolucoestecnologicas\Nfse\Renders\Abrasf\EnviarLoteRpsSincronoResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();
$std->NumeroLote = '123456789012345';
$std->DataRecebimento = date('Y-m-d\TH:i:s');
$std->protocolo = '123456';

$std->listamensagemretorno = new stdClass();
$std->listamensagemretorno->mensagemretorno = (object)[];
$mensagemRetorno = new stdClass();
$mensagemRetorno->Codigo = '1234';
$mensagemRetorno->Mensagem = 'Mensagem Teste';
$mensagemRetorno->Correcao = '121212';

$std->listamensagemretorno->mensagemretorno->{1} = $mensagemRetorno;


header("Content-type: text/xml");
$class = new EnviarLoteRpsSincronoResposta();
$class->save($std, 'examples/xml/abrasf', 'EnviarLoteRpsSincronoResposta');