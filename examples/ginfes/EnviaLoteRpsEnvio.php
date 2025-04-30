<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\EnviarLoteRpsEnvio;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass;
//$std->EnviarLoteRpsEnvio = new stdClass();
$std->Loterps = new stdClass();
$std->Loterps->NumeroLote = '123456789012345';
$std->Loterps->Cnpj = '12345678901234';
$std->Loterps->InscricaoMunicipal = '123456789';
$std->Loterps->QuantidadeRps = 2;
$std->Loterps->Id = '001';
//$std->EnviarLoteRpsEnvio->Loterps->versao = '2.03';

$std->Loterps->ListaRps = new \stdClass();

$std->Loterps->ListaRps->Rps = (object)[];

$infRps = new stdClass();
$infRps->InfRps = new stdClass();
$infRps->InfRps->Id = '001';

$infRps->InfRps->IdentificacaoRps = new stdClass();
$infRps->InfRps->IdentificacaoRps->Numero = '1234';
$infRps->InfRps->IdentificacaoRps->Serie = 'ABC';
$infRps->InfRps->IdentificacaoRps->Tipo = 1;

$infRps->InfRps->DataEmissao = '2023-03-08T23:00:00';
$infRps->InfRps->NaturezaOperacao = '1';
$infRps->InfRps->RegimeEspecialTributacao = '1';
$infRps->InfRps->OptanteSimplesNacional = '1';
$infRps->InfRps->IncentivadorCultural = '0';
$infRps->InfRps->Status = '1';
$infRps->InfRps->RpsSubstituido = new stdClass();
$infRps->InfRps->RpsSubstituido->Numero = '1234';
$infRps->InfRps->RpsSubstituido->Serie = 'ABC';
$infRps->InfRps->RpsSubstituido->Tipo = 1;

$infRps->InfRps->Servico = new stdClass();
$infRps->InfRps->Servico->Valores = new stdClass();
$infRps->InfRps->Servico->Valores->ValorServicos = 1000.00;
$infRps->InfRps->Servico->Valores->ValorDeducoes = 0.00;
$infRps->InfRps->Servico->Valores->ValorPis = 0.00;
$infRps->InfRps->Servico->Valores->ValorCofins = 0.00;
$infRps->InfRps->Servico->Valores->ValorInss = 0.00;
$infRps->InfRps->Servico->Valores->ValorIr = 0.00;
$infRps->InfRps->Servico->Valores->ValorCsll = 0.00;
$infRps->InfRps->Servico->Valores->IssRetido = 0.00;
$infRps->InfRps->Servico->Valores->ValorIss = 0.00;
$infRps->InfRps->Servico->Valores->ValorIssRetido = 0.00;
$infRps->InfRps->Servico->Valores->OutrasRetencoes = 0.00;
$infRps->InfRps->Servico->Valores->BaseCalculo = 0.00;
$infRps->InfRps->Servico->Valores->Aliquota = 0.00;
$infRps->InfRps->Servico->Valores->ValorLiquidoNfse = 0.00;
$infRps->InfRps->Servico->Valores->DescontoIncondicionado = 0.00;
$infRps->InfRps->Servico->Valores->DescontoCondicionado = 0.00;
$infRps->InfRps->Servico->ItemListaServico = "001";
$infRps->InfRps->Servico->CodigoCnae = 123;
$infRps->InfRps->Servico->CodigoTributacaoMunicipio = "001";
$infRps->InfRps->Servico->Discriminacao = 'Conteúdo da NFS-e';
$infRps->InfRps->Servico->CodigoMunicipio = 123;

$infRps->InfRps->Prestador = new stdClass();
$infRps->InfRps->Prestador->Cnpj = '12345678901';
$infRps->InfRps->Prestador->InscricaoMunicipal = '123456789';

$infRps->InfRps->Tomador = new stdClass();
$infRps->InfRps->Tomador->IdentificacaoTomador = new stdClass();
$infRps->InfRps->Tomador->IdentificacaoTomador->CpfCnpj = '12345678901';
$infRps->InfRps->Tomador->IdentificacaoTomador->InscricaoMunicipal = '123456789';
$infRps->InfRps->Tomador->RazaoSocial = '123456789';

$infRps->InfRps->Tomador->Endereco = new stdClass();
$infRps->InfRps->Tomador->Endereco->Endereco = "Rua Teste";
$infRps->InfRps->Tomador->Endereco->Numero = 'SN';
$infRps->InfRps->Tomador->Endereco->Complemento = 'Sem complemento';
$infRps->InfRps->Tomador->Endereco->Bairro = 'Centro';
$infRps->InfRps->Tomador->Endereco->CodigoMunicipio = 0122;
$infRps->InfRps->Tomador->Endereco->Uf = 'AL';
//$infRps->InfRps->Tomador->Endereco->CodigoPais = 1001;
$infRps->InfRps->Tomador->Endereco->Cep = '00000000';
$infRps->InfRps->Tomador->Contato = new stdClass();
$infRps->InfRps->Tomador->Contato->Telefone = "8899999999";
$infRps->InfRps->Tomador->Contato->Email = "none@none.com";

$infRps->InfRps->IntermediarioServico = new stdClass();
$infRps->InfRps->IntermediarioServico->RazaoSocial = 'Empresa teste';
$infRps->InfRps->IntermediarioServico->CpfCnpj = '12345678901';
$infRps->InfRps->IntermediarioServico->InscricaoMunicipal = '123456789';

$infRps->InfRps->ConstrucaoCivil = new stdClass(); // NULL
$infRps->InfRps->ConstrucaoCivil->CodigoObra = '001'; // NULL
$infRps->InfRps->ConstrucaoCivil->Art = '111'; // NULL

$std->Loterps->ListaRps->Rps->{1} = $infRps;

header("Content-type: text/xml");
$class = new EnviarLoteRpsEnvio();
$class->save($std, 'examples/xml/ginfes', 'EnviarLoteRpsEnvio');
