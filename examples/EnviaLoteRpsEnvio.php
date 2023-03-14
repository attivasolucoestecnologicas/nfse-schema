<?php

use Ativasolucoestecnologicas\Nfse\EnviarLoteRpsEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../vendor/autoload.php';

$std = new stdClass;
$std->EnviarLoteRpsEnvio = new stdClass();
$std->EnviarLoteRpsEnvio->Loterps = new stdClass();
$std->EnviarLoteRpsEnvio->Loterps->NumeroLote = '123456789012345';
$std->EnviarLoteRpsEnvio->Loterps->CpfCnpj = '12345678901234';
$std->EnviarLoteRpsEnvio->Loterps->InscricaoMunicipal = '123456789';
$std->EnviarLoteRpsEnvio->Loterps->QuantidadeRps = 2;
$std->EnviarLoteRpsEnvio->Loterps->Id = '001';
$std->EnviarLoteRpsEnvio->Loterps->versao = '2.03';

$std->EnviarLoteRpsEnvio->Loterps->ListaRps = new \stdClass();

$std->EnviarLoteRpsEnvio->Loterps->ListaRps->Rps = (object)[];
$infDeclaracaoPrestacaoServico = new stdClass();
$infDeclaracaoPrestacaoServico->Rps = new stdClass();
$infDeclaracaoPrestacaoServico->Rps->DataEmissao = '2023-03-08';
$infDeclaracaoPrestacaoServico->Rps->Status = 1;
$infDeclaracaoPrestacaoServico->Rps->Id = '1234';
$infDeclaracaoPrestacaoServico->Rps->IdentificacaoRps = new stdClass();
$infDeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Numero = '1234';
$infDeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Serie = 'ABC';
$infDeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Tipo = 1;
$infDeclaracaoPrestacaoServico->Rps->RpsSubstituido = new stdClass();
$infDeclaracaoPrestacaoServico->Rps->RpsSubstituido->Numero = '1234';
$infDeclaracaoPrestacaoServico->Rps->RpsSubstituido->Serie = 'ABC';
$infDeclaracaoPrestacaoServico->Rps->RpsSubstituido->Tipo = 1;

$infDeclaracaoPrestacaoServico->Competencia = '2023-02-09'; // OK
$infDeclaracaoPrestacaoServico->Servico = new stdClass();
$infDeclaracaoPrestacaoServico->Servico->Valores = new stdClass();
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorServicos = 1000.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorDeducoes = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorPis = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorCofins = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorInss = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorIr = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorCsll = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->OutrasRetencoes = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValTotTributos = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->ValorIss = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->Aliquota = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->DescontoIncondicionado = 0.00;
$infDeclaracaoPrestacaoServico->Servico->Valores->DescontoCondicionado = 0.00;
$infDeclaracaoPrestacaoServico->Servico->IssRetido = 1;
$infDeclaracaoPrestacaoServico->Servico->ResponsavelRetencao = 1;
$infDeclaracaoPrestacaoServico->Servico->ItemListaServico = "001";
$infDeclaracaoPrestacaoServico->Servico->CodigoCnae = 123;
$infDeclaracaoPrestacaoServico->Servico->CodigoTributacaoMunicipio = "001";
$infDeclaracaoPrestacaoServico->Servico->CodigoNbs = '001';
$infDeclaracaoPrestacaoServico->Servico->Discriminacao = 'Conteúdo da NFS-e';
$infDeclaracaoPrestacaoServico->Servico->CodigoMunicipio = 123;
$infDeclaracaoPrestacaoServico->Servico->CodigoPais = '1234';
$infDeclaracaoPrestacaoServico->Servico->ExigibilidadeISS = 1;
$infDeclaracaoPrestacaoServico->Servico->MunicipioIncidencia = 1;
$infDeclaracaoPrestacaoServico->Servico->NumeroProcesso = '001';

$infDeclaracaoPrestacaoServico->Prestador = new stdClass();
$infDeclaracaoPrestacaoServico->Prestador->CpfCnpj = '12345678901';
$infDeclaracaoPrestacaoServico->Prestador->InscricaoMunicipal = '123456789';

$infDeclaracaoPrestacaoServico->TomadorServico = new stdClass();
$infDeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador = new stdClass();
$infDeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->CpfCnpj = '12345678901';
$infDeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->InscricaoMunicipal = '123456789';
$infDeclaracaoPrestacaoServico->TomadorServico->NifTomador = '12345678901';
$infDeclaracaoPrestacaoServico->TomadorServico->RazaoSocial = '123456789';
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco = new stdClass();
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->Endereco = "Rua Teste";
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->Numero = 'SN';
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->Complemento = 'Sem complemento';
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->Bairro = 'Centro';
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoMunicipio = 0122;
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->Uf = 'AL';
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoPais = 1001;
$infDeclaracaoPrestacaoServico->TomadorServico->Endereco->Cep = '00000000';
$infDeclaracaoPrestacaoServico->TomadorServico->Contato = new stdClass();
$infDeclaracaoPrestacaoServico->TomadorServico->Contato->Telefone = "8899999999";
$infDeclaracaoPrestacaoServico->TomadorServico->Contato->Email = "none@none.com";
$infDeclaracaoPrestacaoServico->Intermediario = new stdClass(); // NULL
$infDeclaracaoPrestacaoServico->Intermediario->RazaoSocial = 'Empresa teste'; // NULL
$infDeclaracaoPrestacaoServico->Intermediario->CodigoMunicipio = '1234567';
$infDeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario = new stdClass(); // NULL
$infDeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->CpfCnpj = '12345678901';
$infDeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->InscricaoMunicipal = '123456789';
$infDeclaracaoPrestacaoServico->ConstrucaoCivil = new stdClass(); // NULL
$infDeclaracaoPrestacaoServico->ConstrucaoCivil->CodigoObra = '001'; // NULL
$infDeclaracaoPrestacaoServico->ConstrucaoCivil->Art = '111'; // NULL
$infDeclaracaoPrestacaoServico->RegimeEspecialTributacao = 1; // NULL - OK
$infDeclaracaoPrestacaoServico->OptanteSimplesNacional = 1; // 1 - SIM | 2 - NÃO - OK
$infDeclaracaoPrestacaoServico->IncentivoFiscal = 2;  // 1 - SIM | 2 - NÃO - OK
$infDeclaracaoPrestacaoServico->Id = '001'; // OK

$std->EnviarLoteRpsEnvio->Loterps->ListaRps->Rps->{1} = $infDeclaracaoPrestacaoServico;
// $std->EnviarLoteRpsEnvio->Loterps->ListaRps->Rps->{2} = $infDeclaracaoPrestacaoServico;
// $std->EnviarLoteRpsEnvio->Loterps->ListaRps->Rps->{3} = $infDeclaracaoPrestacaoServico;
// $std->EnviarLoteRpsEnvio->Loterps->ListaRps->Rps->{4} = $infDeclaracaoPrestacaoServico;

header("Content-type: text/xml");
$class = new EnviarLoteRpsEnvio();
$class->save($std, 'examples/xml', 'EnviarLoteRpsEnvio');
