<?php

use Ativasolucoestecnologicas\Nfse\ConsultaNfseFaixaEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->Pagina = '1';

$std->Faixa = new stdClass();
$std->Faixa->NumeroNfseInicial = '1234';
$std->Faixa->NumeroNfseFinal = '4321';

$std->Prestador = new stdClass();
$std->Prestador->CpfCnpj = '12345678901234';
$std->Prestador->InscricaoMunicipal = '12345678';

header("Content-type: text/xml");
$class = new ConsultaNfseFaixaEnvio();
$class->save($std, 'examples/xml/abrasf', 'ConsultaNfseFaixaEnvio');