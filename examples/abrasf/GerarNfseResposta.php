<?php
use Ativasolucoestecnologicas\Nfse\GerarNfseResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();
$std->listamensagemretorno = new stdClass();
$mensagemRetorno = new stdClass();
$mensagemRetorno->Codigo = '1234';
$mensagemRetorno->Mensagem = 'Mensagem Teste';
$mensagemRetorno->Correcao = '121212';

$std->listamensagemretorno->mensagemretorno = (object)[];
$std->listamensagemretorno->mensagemretorno->{1} = $mensagemRetorno;


header("Content-type: text/xml");
$class = new GerarNfseResposta();
$class->save($std, 'examples/xml/abrasf', 'GerarNfseResposta');