<?php

use Ativasolucoestecnologicas\Nfse\Nfse;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../vendor/autoload.php';

$std = new stdClass;
$std->cabecalho = new stdClass();
$std->cabecalho->versaoDados = '2.30';
$std->cabecalho->versao = '2.33';

$std->CompNfse = new stdClass();

$std->CompNfse->Nfse = new stdClass();
$std->CompNfse->Nfse->versao = '2.30';

$std->CompNfse->Nfse->InfNfse = new stdClass();
$std->CompNfse->Nfse->InfNfse->Id = '123';
$std->CompNfse->Nfse->InfNfse->Numero = '123456'; // NÚMERICO | ATÉ 15 DIGITOS
$std->CompNfse->Nfse->InfNfse->CodigoVerificacao = '123'; // CARACTERE | ATÉ 9 DIGITOS
$std->CompNfse->Nfse->InfNfse->DataEmissao = '2023-03-07T15:29:00'; //
$std->CompNfse->Nfse->InfNfse->NfseSubstituida = '123'; // NULL | NÚMERICO | ATÉ 15 DIGITOS
$std->CompNfse->Nfse->InfNfse->OutrasInformacoes = "Informações complementares"; // NULL
$std->CompNfse->Nfse->InfNfse->ValorCredito = 0.00; // NULL | EXEMPLO 1000.00

$std->CompNfse->Nfse->InfNfse->ValoresNfse = new stdClass();
$std->CompNfse->Nfse->InfNfse->ValoresNfse->BaseCalculo = 0.00;
$std->CompNfse->Nfse->InfNfse->ValoresNfse->Aliquota = 0.00;
$std->CompNfse->Nfse->InfNfse->ValoresNfse->ValorIss = 0.00;
$std->CompNfse->Nfse->InfNfse->ValoresNfse->ValorLiquidoNfse = 123435.77;

$std->CompNfse->Nfse->InfNfse->PrestadorServico = new stdClass();
$std->CompNfse->Nfse->InfNfse->PrestadorServico->RazaoSocial = "Fulano de Tal";
$std->CompNfse->Nfse->InfNfse->PrestadorServico->NomeFantasia = "Armazem";

$std->CompNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador = new stdClass();
$std->CompNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->CpfCnpj = '12345678901';
$std->CompNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->InscricaoMunicipal = '9876543210';

$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco = new stdClass();
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Endereco = "Rua Teste";
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Numero = '22';
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Complemento = 'Sem complemento';
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Bairro = 'Centro';
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->CodigoMunicipio = 0122;
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Uf = 'AL';
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->CodigoPais = 1001;
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Endereco->Cep = '55555555';

$std->CompNfse->Nfse->InfNfse->PrestadorServico->Contato = new stdClass();
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Contato->Telefone = "8899999999";
$std->CompNfse->Nfse->InfNfse->PrestadorServico->Contato->Email = 'none@mail.com';

$std->CompNfse->Nfse->InfNfse->OrgaoGerador = new stdClass();
$std->CompNfse->Nfse->InfNfse->OrgaoGerador->CodigoMunicipio = '1234';
$std->CompNfse->Nfse->InfNfse->OrgaoGerador->Uf = 'AL';

$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico = new \stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps = new \stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->DataEmissao = '2023-03-08';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->Status = 1;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->Id = '1234';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Numero = '1234';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Serie = 'ABC';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Tipo = 1;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Numero = '1234';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Serie = 'ABC';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Tipo = 1;

// tcInfDeclaracaoPrestacaoServico
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Competencia = '2023-02-09'; // OK
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorServicos = 1000.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorDeducoes = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorPis = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorCofins = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorInss = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorIr = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorCsll = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->OutrasRetencoes = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValTotTributos = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorIss = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->Aliquota = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->DescontoIncondicionado = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->DescontoCondicionado = 0.00;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->IssRetido = 1;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->ResponsavelRetencao = 1;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->ItemListaServico = "001";
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoCnae = 123;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoTributacaoMunicipio = "001";
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoNbs = '001';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Discriminacao = 'Conteúdo da NFS-e';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoMunicipio = 123;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoPais = '1001';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->ExigibilidadeISS = 1;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->MunicipioIncidencia = 1;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->NumeroProcesso = '001';

$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Prestador = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Prestador->CpfCnpj = '12345678901';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Prestador->InscricaoMunicipal = '123456789';

$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->CpfCnpj = '12345678901';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->InscricaoMunicipal = '123456789';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->NifTomador = '12345678901';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->RazaoSocial = '123456789';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Endereco = "Rua Teste";
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Numero = 'SN';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Complemento = 'Sem complemento';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Bairro = 'Centro';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoMunicipio = 0122;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Uf = 'AL';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoPais = 1001;
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Cep = '00000000';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Contato = new stdClass();
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Contato->Telefone = "8899999999";
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Contato->Email = "none@none.com";
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario = new stdClass(); // NULL
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->RazaoSocial = 'Empresa teste'; // NULL
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->CodigoMunicipio = '1234567';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario = new stdClass(); // NULL
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->CpfCnpj = '12345678901';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->InscricaoMunicipal = '123456789';
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->ConstrucaoCivil = new stdClass(); // NULL
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->ConstrucaoCivil->CodigoObra = '001'; // NULL
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->ConstrucaoCivil->Art = '111'; // NULL
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->RegimeEspecialTributacao = 1; // NULL - OK
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->OptanteSimplesNacional = 1; // 1 - SIM | 2 - NÃO - OK
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->IncentivoFiscal = 2;  // 1 - SIM | 2 - NÃO - OK
$std->CompNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Id = '001'; // OK

header("Content-type: text/xml");
Nfse::save($std, './examples');
//$nfse = Nfse::render($std);
//echo $nfse;
