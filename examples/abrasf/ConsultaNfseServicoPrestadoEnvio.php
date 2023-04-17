<?php

use Ativasolucoestecnologicas\Nfse\Renders\Abrasf\ConsultaNfseServicoPrestadoEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->NumeroNfse = '123456';
$std->Pagina = '1';

$std->Prestador = new stdClass();
$std->Prestador->CpfCnpj = '12345678901234';
$std->Prestador->InscricaoMunicipal = '12345678';

$std->PeriodoEmissao = new stdClass();
$std->PeriodoEmissao->DataInicial = date('Y-m-d');
$std->PeriodoEmissao->DataFinal = date('Y-m-d');

$std->Tomador = new stdClass();
$std->Tomador->CpfCnpj = '12345678901';
$std->Tomador->InscricaoMunicipal = '123456789';

$std->Intermediario = new stdClass();
$std->Intermediario->CpfCnpj = '12345678901';
$std->Intermediario->InscricaoMunicipal = '123456789';

header("Content-type: text/xml");
$class = new ConsultaNfseServicoPrestadoEnvio();
$class->save($std, 'examples/xml/abrasf', 'ConsultaNfseServicoPrestadoEnvio');