<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\ConsultaLoteRpsEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->Id = '001';
$std->protocolo = '1234';
$std->prestador = new stdClass();
$std->prestador->CpfCnpj = '12345678901234';
$std->prestador->InscricaoMunicipal = '12345678';

header("Content-type: text/xml");
$class = new ConsultaLoteRpsEnvio();
$class->save($std, 'examples/xml/ginfes', 'ConsultaLoteRpsEnvio');