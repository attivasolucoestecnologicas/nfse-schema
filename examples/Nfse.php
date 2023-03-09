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
$std->NfseSubstituida = '123'; // NULL | NÚMERICO | ATÉ 15 DIGITOS
$std->OutrasInformacoes = "Informações complementares"; // NULL
$std->ValorCredito = 0.00; // NULL | EXEMPLO 1000.00

$std->ValoresNfse = new stdClass();
$std->ValoresNfse->BaseCalculo = 0.00;
$std->ValoresNfse->Aliquota = 0.00;
$std->ValoresNfse->ValorIss = 0.00;
$std->ValoresNfse->ValorLiquidoNfse = 123435.77;

$std->PrestadorServico = new stdClass();
$std->PrestadorServico->RazaoSocial = "Fulano de Tal";
$std->PrestadorServico->NomeFantasia = "Armazem";

$std->PrestadorServico->IdentificacaoPrestador = new stdClass();
$std->PrestadorServico->IdentificacaoPrestador->CpfCnpj = '12345678901';
$std->PrestadorServico->IdentificacaoPrestador->InscricaoMunicipal = '9876543210';

$std->PrestadorServico->Endereco = new stdClass();
$std->PrestadorServico->Endereco->Endereco = "Rua Teste";
$std->PrestadorServico->Endereco->Numero = '22';
$std->PrestadorServico->Endereco->Complemento = 'Sem complemento';
$std->PrestadorServico->Endereco->Bairro = 'Centro';
$std->PrestadorServico->Endereco->CodigoMunicipio = 0122;
$std->PrestadorServico->Endereco->Uf = 'AL';
$std->PrestadorServico->Endereco->CodigoPais = 012;
$std->PrestadorServico->Endereco->Cep = '55555555';

$std->PrestadorServico->Contato = new stdClass();
$std->PrestadorServico->Contato->Telefone = "8899999999";
$std->PrestadorServico->Contato->Email = 'none@mail.com';

$std->OrgaoGerador = new stdClass();
$std->OrgaoGerador->CodigoMunicipio = '1234';
$std->OrgaoGerador->Uf = 'AL';

$std->DeclaracaoPrestacaoServico = new \stdClass();
$std->DeclaracaoPrestacaoServico->Rps = new \stdClass();
$std->DeclaracaoPrestacaoServico->Rps->DataEmissao = '2023-03-08';
$std->DeclaracaoPrestacaoServico->Rps->Status = 1;
$std->DeclaracaoPrestacaoServico->Rps->Id = '1234';
$std->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps = new stdClass();
$std->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Numero = '1234';
$std->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Serie = 'ABC';
$std->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Tipo = 1;
$std->DeclaracaoPrestacaoServico->Rps->RpsSubstituido = new stdClass();
$std->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Numero = '1234';
$std->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Serie = 'ABC';
$std->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Tipo = 1;

// tcInfDeclaracaoPrestacaoServico
$std->DeclaracaoPrestacaoServico->Competencia = '2023-02-09'; // OK
$std->DeclaracaoPrestacaoServico->Servico = new stdClass();
$std->DeclaracaoPrestacaoServico->Servico->Valores = new stdClass();
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorServicos = 1000.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorDeducoes = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorPis = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorCofins = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorInss = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorIr = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorCsll = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->OutrasRetencoes = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValTotTributos = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->ValorIss = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->Aliquota = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->DescontoIncondicionado = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->Valores->DescontoCondicionado = 0.00;
$std->DeclaracaoPrestacaoServico->Servico->IssRetido = 1;
$std->DeclaracaoPrestacaoServico->Servico->ResponsavelRetencao = 1;
$std->DeclaracaoPrestacaoServico->Servico->ItemListaServico = "001";
$std->DeclaracaoPrestacaoServico->Servico->CodigoCnae = 123;
$std->DeclaracaoPrestacaoServico->Servico->CodigoTributacaoMunicipio = "001";
$std->DeclaracaoPrestacaoServico->Servico->CodigoNbs = '001';
$std->DeclaracaoPrestacaoServico->Servico->Discriminacao = 'Conteúdo da NFS-e';
$std->DeclaracaoPrestacaoServico->Servico->CodigoMunicipio = 123;
$std->DeclaracaoPrestacaoServico->Servico->CodigoPais = '001';
$std->DeclaracaoPrestacaoServico->Servico->ExigibilidadeISS = 1;
$std->DeclaracaoPrestacaoServico->Servico->MunicipioIncidencia = 1;
$std->DeclaracaoPrestacaoServico->Servico->NumeroProcesso = '001';

$std->DeclaracaoPrestacaoServico->Prestador = new stdClass();
$std->DeclaracaoPrestacaoServico->Prestador->CpfCnpj = '12345678901';
$std->DeclaracaoPrestacaoServico->Prestador->InscricaoMunicipal = '123456789';

$std->DeclaracaoPrestacaoServico->TomadorServico = new stdClass();
$std->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador = new stdClass();
$std->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->CpfCnpj = '12345678901';
$std->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->InscricaoMunicipal = '123456789';
$std->DeclaracaoPrestacaoServico->TomadorServico->NifTomador = '12345678901';
$std->DeclaracaoPrestacaoServico->TomadorServico->RazaoSocial = '123456789';
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco = new stdClass();
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Endereco = "Rua Teste";
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Numero = 'SN';
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Complemento = 'Sem complemento';
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Bairro = 'Centro';
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoMunicipio = 0122;
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Uf = 'AL';
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoPais = 012;
$std->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Cep = '00000000';
$std->DeclaracaoPrestacaoServico->TomadorServico->Contato = new stdClass();
$std->DeclaracaoPrestacaoServico->TomadorServico->Contato->Telefone = "8899999999";
$std->DeclaracaoPrestacaoServico->TomadorServico->Contato->Email = "none@none.com";
$std->DeclaracaoPrestacaoServico->Intermediario = new stdClass(); // NULL
$std->DeclaracaoPrestacaoServico->Intermediario->RazaoSocial = 'Empresa teste'; // NULL
$std->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario = new stdClass(); // NULL
$std->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->CpfCnpj = '12345678901';
$std->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->InscricaoMunicipal = '123456789';
$std->DeclaracaoPrestacaoServico->ConstrucaoCivil = new stdClass(); // NULL
$std->DeclaracaoPrestacaoServico->ConstrucaoCivil->CodigoObra = '001'; // NULL
$std->DeclaracaoPrestacaoServico->ConstrucaoCivil->Art = '111'; // NULL
$std->DeclaracaoPrestacaoServico->RegimeEspecialTributacao = 1; // NULL - OK
$std->DeclaracaoPrestacaoServico->OptanteSimplesNacional = 1; // 1 - SIM | 2 - NÃO - OK
$std->DeclaracaoPrestacaoServico->IncentivoFiscal = 2;  // 1 - SIM | 2 - NÃO - OK
$std->DeclaracaoPrestacaoServico->Id = '001'; // OK

header("Content-type: text/xml");
Nfse::save($std, './examples');
$nfse = Nfse::render($std);
echo $nfse;