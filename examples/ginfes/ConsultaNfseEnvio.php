<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\ConsultaNfseEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->Id = '001';

$std->NumeroNfse = '1234567';

$std->Prestador = new stdClass();
$std->Prestador->CpfCnpj = '12345678901234';
$std->Prestador->InscricaoMunicipal = '12345678';

$std->PeriodoEmissao = new stdClass();
$std->PeriodoEmissao->DataInicial = date('Y-m-d');
$std->PeriodoEmissao->DataFinal = date('Y-m-d');

$std->Tomador = new stdClass();
$std->Tomador->CpfCnpj = '12345678901';
$std->Tomador->InscricaoMunicipal = '9876543210';

$std->IntermediarioServico = new stdClass();
$std->IntermediarioServico->RazaoSocial = "Fulano de Tal";
$std->IntermediarioServico->CpfCnpj = '12345678901';
$std->IntermediarioServico->InscricaoMunicipal = '9876543210';

header("Content-type: text/xml");
$class = new ConsultaNfseEnvio();
$class->save($std, 'examples/ginfes/xml', 'ConsultaNfseEnvio');