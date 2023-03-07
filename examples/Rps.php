<?php

use Ativasolucoestecnologicas\Nfse\Rps;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../vendor/autoload.php';

$std = new stdClass;

$std->IdentificacaoRps = new \stdClass();
$std->IdentificacaoRps->NumeroLote = '123456';
$std->IdentificacaoRps->CpfCnpj = '12345678901234';
$std->IdentificacaoRps->InscricaoMunicipal = '123456789';
$std->IdentificacaoRps->QuantidadeRps = 2;
$std->IdentificacaoRps->Id = 'Lote';
$std->IdentificacaoRps->versao = '2.03';

$std->ListaRps = new \stdClass();
$std->ListaRps->Rps = (object)[
    (object)[
        'Rps' => '123',
        'Competencia' => '02/2023',
        'Servico' => '001',
        'Prestador' => '001',
        'TomadorServico' => '001',
        'Intermediario' => '001',
        'ConstrucaoCivil' => '001',
        'RegimeEspecialTributacao' => '001',
        'OptanteSimplesNacional' => 'S',
        'IncentivoFiscal' => 'N',
        'Id' => '001',
    ],
    (object)[
        'Rps' => '345',
        'Competencia' => '03/2023',
        'Servico' => '002',
        'Prestador' => '002',
        'TomadorServico' => '002',
        'Intermediario' => '002',
        'ConstrucaoCivil' => '002',
        'RegimeEspecialTributacao' => '002',
        'OptanteSimplesNacional' => 'S',
        'IncentivoFiscal' => 'N',
        'Id' => '002',
    ]
];

header("Content-type: text/xml");
$rps = Rps::render($std);
echo $rps;
