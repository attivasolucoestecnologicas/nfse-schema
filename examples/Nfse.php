<?php

use Ativasolucoestecnologicas\Nfse\Nfse;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../vendor/autoload.php';

$std = new stdClass;
$std->versao = '2.30';
$std->Id = '123';
$std->Numero = '123456'; // NÚMERICO | ATÉ 15 DIGITOS
$std->CodigoVerificacao = '123'; // CARACTERE | ATÉ 9 DIGITOS
$std->DataEmissao = '2023-03-07T15:29:00'; //
$std->NfseSubstituida = null; // NULL | NÚMERICO | ATÉ 15 DIGITOS
$std->OutrasInformacoes = null; // NULL

$std->ValorCredito = null; // NULL | EXEMPLO 1000.00

$std->ValoresNfse = new stdClass();
$std->ValoresNfse->BaseCalculo = null;
$std->ValoresNfse->Aliquota = null;
$std->ValoresNfse->ValorIss = null;
$std->ValoresNfse->ValorLiquidoNfse = 123435.77;

$std->PrestadorServico = new stdClass();
$std->PrestadorServico->RazaoSocial = "Fulano de Tal";
$std->PrestadorServico->NomeFantasia = "Armazem";

$std->PrestadorServico->IdentificacaoPrestador = new stdClass();
$std->PrestadorServico->IdentificacaoPrestador->CpfCnpj = '12345678901';
$std->PrestadorServico->IdentificacaoPrestador->InscricaoMunicipal = null;

$std->PrestadorServico->Endereco = new stdClass();
$std->PrestadorServico->Endereco->Endereco = "Rua Teste";
$std->PrestadorServico->Endereco->Numero = null;
$std->PrestadorServico->Endereco->Complemento = null;
$std->PrestadorServico->Endereco->Bairro = null;
$std->PrestadorServico->Endereco->CodigoMunicipio = null;
$std->PrestadorServico->Endereco->Uf = null;
$std->PrestadorServico->Endereco->CodigoPais = null;
$std->PrestadorServico->Endereco->Cep = null;

$std->PrestadorServico->Contato = new stdClass();
$std->PrestadorServico->Contato->Telefone = "8899999999";
$std->PrestadorServico->Contato->Email = null;

$std->OrgaoGerador = new stdClass();
$std->OrgaoGerador->CodigoMunicipio = '1234';
$std->OrgaoGerador->Uf = 'AL';

$std->DeclaracaoPrestacaoServico = new \stdClass();
$std->DeclaracaoPrestacaoServico->Rps = '123';
$std->DeclaracaoPrestacaoServico->Competencia = '02/2023';
$std->DeclaracaoPrestacaoServico->Servico = '001';
$std->DeclaracaoPrestacaoServico->Prestador = '001';
$std->DeclaracaoPrestacaoServico->TomadorServico = '001';
$std->DeclaracaoPrestacaoServico->Intermediario = null; // NULL
$std->DeclaracaoPrestacaoServico->ConstrucaoCivil = null; // NULL
$std->DeclaracaoPrestacaoServico->RegimeEspecialTributacao = null; // NULL
$std->DeclaracaoPrestacaoServico->OptanteSimplesNacional = 1; // 1 - SIM | 2 - NÃO
$std->DeclaracaoPrestacaoServico->IncentivoFiscal = 2;  // 1 - SIM | 2 - NÃO
$std->DeclaracaoPrestacaoServico->Id = '001';

header("Content-type: text/xml");
$nfse = Nfse::render($std);
echo $nfse;
