<?php

use Ativasolucoestecnologicas\Nfse\Renders\Ginfes\ConsultaNfseResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$std->Situacao = '1';

$std->ListaNfse = (object)[];

$compNfse = new stdClass();
$compNfse->Nfse = new stdClass();
$compNfse->Nfse->versao = '2.30';

$compNfse->Nfse->InfNfse = new stdClass();
$compNfse->Nfse->InfNfse->Id = '123';
$compNfse->Nfse->InfNfse->Numero = '123456'; // NÚMERICO | ATÉ 15 DIGITOS
$compNfse->Nfse->InfNfse->CodigoVerificacao = '123'; // CARACTERE | ATÉ 9 DIGITOS
$compNfse->Nfse->InfNfse->DataEmissao = '2023-03-07T15:29:00'; //
$compNfse->Nfse->InfNfse->IdentificacaoRps = new stdClass();
$compNfse->Nfse->InfNfse->IdentificacaoRps->Numero = 1;
$compNfse->Nfse->InfNfse->IdentificacaoRps->Serie = 1;
$compNfse->Nfse->InfNfse->IdentificacaoRps->Tipo = 1;
$compNfse->Nfse->InfNfse->DataEmissaoRps = date('Y-m-d');
$compNfse->Nfse->InfNfse->NaturezaOperacao = 1;
$compNfse->Nfse->InfNfse->RegimeEspecialTributacao = 1;
$compNfse->Nfse->InfNfse->OptanteSimplesNacional = 1;
$compNfse->Nfse->InfNfse->IncentivadorCultural = 1;
$compNfse->Nfse->InfNfse->Competencia = 1;
$compNfse->Nfse->InfNfse->NfseSubstituida = 1;
$compNfse->Nfse->InfNfse->OutrasInformacoes = "Informações complementares"; // NULL
$compNfse->Nfse->InfNfse->Servico = new stdClass();
$compNfse->Nfse->InfNfse->Servico->ItemListaServico = 1;
$compNfse->Nfse->InfNfse->Servico->CodigoCnae = 1;
$compNfse->Nfse->InfNfse->Servico->CodigoTributacaoMunicipio = 1;
$compNfse->Nfse->InfNfse->Servico->Discriminacao = 1;
$compNfse->Nfse->InfNfse->Servico->CodigoMunicipio = 1;
$compNfse->Nfse->InfNfse->Servico->Valores = new stdClass();

$compNfse->Nfse->InfNfse->Servico->Valores->ValorServicos = 1.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorDeducoes = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorPis = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorCofins = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorInss = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorIr = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorCsll = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->IssRetido = true;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorIss = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorIssRetido = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->OutrasRetencoes = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->BaseCalculo = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->Aliquota = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->ValorLiquidoNfse = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->DescontoIncondicionado = 0.00;
$compNfse->Nfse->InfNfse->Servico->Valores->DescontoCondicionado = 0.00;
$compNfse->Nfse->InfNfse->ValorCredito = 0.00; // NULL | EXEMPLO 1000.00

$compNfse->Nfse->InfNfse->PrestadorServico = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->RazaoSocial = "Fulano de Tal";
$compNfse->Nfse->InfNfse->PrestadorServico->NomeFantasia = "Armazem";
$compNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->Cnpj = '12345678901';
$compNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->InscricaoMunicipal = '9876543210';

$compNfse->Nfse->InfNfse->PrestadorServico->Endereco = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Endereco = "Rua Teste";
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Numero = '22';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Complemento = 'Sem complemento';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Bairro = 'Centro';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->CodigoMunicipio = 0122;
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Uf = 'AL';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Cep = '55555555';

$compNfse->Nfse->InfNfse->PrestadorServico->Contato = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->Contato->Telefone = "8899999999";
$compNfse->Nfse->InfNfse->PrestadorServico->Contato->Email = 'none@mail.com';

$compNfse->Nfse->InfNfse->TomadorServico = new stdClass();
$compNfse->Nfse->InfNfse->TomadorServico->RazaoSocial = "Fulano de Tal";
$compNfse->Nfse->InfNfse->TomadorServico->IdentificacaoTomador = new stdClass();
$compNfse->Nfse->InfNfse->TomadorServico->IdentificacaoTomador->CpfCnpj = '12345678901';
$compNfse->Nfse->InfNfse->TomadorServico->IdentificacaoTomador->InscricaoMunicipal = '9876543210';

$compNfse->Nfse->InfNfse->TomadorServico->Endereco = new stdClass();
$compNfse->Nfse->InfNfse->TomadorServico->Endereco->Endereco = "Rua Teste";
$compNfse->Nfse->InfNfse->TomadorServico->Endereco->Numero = '22';
$compNfse->Nfse->InfNfse->TomadorServico->Endereco->Complemento = 'Sem complemento';
$compNfse->Nfse->InfNfse->TomadorServico->Endereco->Bairro = 'Centro';
$compNfse->Nfse->InfNfse->TomadorServico->Endereco->CodigoMunicipio = 0122;
$compNfse->Nfse->InfNfse->TomadorServico->Endereco->Uf = 'AL';
$compNfse->Nfse->InfNfse->TomadorServico->Endereco->Cep = '55555555';

$compNfse->Nfse->InfNfse->TomadorServico->Contato = new stdClass();
$compNfse->Nfse->InfNfse->TomadorServico->Contato->Telefone = "8899999999";
$compNfse->Nfse->InfNfse->TomadorServico->Contato->Email = 'none@mail.com';

$compNfse->Nfse->InfNfse->IntermediarioServico = new stdClass();
$compNfse->Nfse->InfNfse->IntermediarioServico->RazaoSocial = "Fulano de Tal";
$compNfse->Nfse->InfNfse->IntermediarioServico->CpfCnpj = '12345678901';
$compNfse->Nfse->InfNfse->IntermediarioServico->InscricaoMunicipal = '9876543210';

$compNfse->Nfse->InfNfse->OrgaoGerador = new stdClass();
$compNfse->Nfse->InfNfse->OrgaoGerador->CodigoMunicipio = '1234';
$compNfse->Nfse->InfNfse->OrgaoGerador->Uf = 'AL';

$compNfse->Nfse->InfNfse->ConstrucaoCivil = new stdClass();
$compNfse->Nfse->InfNfse->ConstrucaoCivil->CodigoObra = '1234';
$compNfse->Nfse->InfNfse->ConstrucaoCivil->Art = 'AL';

$std->ListaNfse->{1} = $compNfse;
//$std->ListaNfse->{2} = $compNfse;

//$std->listamensagemalertaretorno = new stdClass();
//$std->listamensagemalertaretorno->mensagemRetorno = (object)[];
//
//$mensagemRetorno = new stdClass();
//$mensagemRetorno->Codigo = '001';
//$mensagemRetorno->Mensagem = '002';
//$mensagemRetorno->Correcao = '003';
//
//$std->listamensagemalertaretorno->mensagemRetorno->{1} = $mensagemRetorno;
//$std->listamensagemalertaretorno->mensagemRetorno->{2} = $mensagemRetorno;

//$std->listamensagemretorno = new stdClass();
//$std->listamensagemretorno->mensagemretorno = (object)[];
//$mensagemRetorno = new stdClass();
//$mensagemRetorno->Codigo = '1234';
//$mensagemRetorno->Mensagem = 'Mensagem Teste';
//$mensagemRetorno->Correcao = '121212';
//
//$std->listamensagemretorno->mensagemretorno->{1} = $mensagemRetorno;

header("Content-type: text/xml");
$class = new ConsultaNfseResposta();
$class->save($std, 'examples/ginfes/xml', 'ConsultaNfseResposta');