<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\ConsultaSituacaoLoteRpsResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();
//$std->NumeroLote = '123456789012345';
//$std->DataRecebimento = date('Y-m-d\TH:i:s');
//$std->protocolo = '123456';

$std->listamensagemretorno = new stdClass();
$std->listamensagemretorno->mensagemretorno = new stdClass();
$std->listamensagemretorno->mensagemretorno->Codigo = '1234';
$std->listamensagemretorno->mensagemretorno->Mensagem = 'Mensagem Teste';
$std->listamensagemretorno->mensagemretorno->Correcao = '121212';


header("Content-type: text/xml");
$class = new ConsultaSituacaoLoteRpsResposta();
$class->save($std, 'examples/xml/ginfes', 'ConsultaSituacaoLoteRpsResposta');