<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\ConsultaSituacaoLoteRpsEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->Id = '001';
$std->Protocolo = '123456789';

$std->Prestador = new stdClass();
$std->Prestador->Cnpj = '12345678901234';
$std->Prestador->InscricaoMunicipal = '12345678';

header("Content-type: text/xml");
$class = new ConsultaSituacaoLoteRpsEnvio();
$class->save($std, 'examples/xml/ginfes', 'ConsultarSituacaoLoteRpsEnvio');