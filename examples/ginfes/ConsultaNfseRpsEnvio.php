<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\ConsultaNfseRpsEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->IdentificacaoRps = new stdClass();
$std->IdentificacaoRps->Numero = '123456789012345';
$std->IdentificacaoRps->Serie = 'ABC';
$std->IdentificacaoRps->Tipo = 1;

$std->Prestador = new stdClass();
$std->Prestador->CpfCnpj = '12345678901234';
$std->Prestador->InscricaoMunicipal = '12345678';

header("Content-type: text/xml");
$class = new ConsultaNfseRpsEnvio();
$class->save($std, 'examples/ginfes/xml', 'ConsultaNfseRpsEnvio');