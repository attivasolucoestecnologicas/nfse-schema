<?php

use Ativasolucoestecnologicas\Nfse\ConsultaNfseRpsResposta;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../vendor/autoload.php';

$std = new stdClass();

$compNfse = new stdClass();
$compNfse->Nfse = new stdClass();
$compNfse->Nfse->versao = '2.30';

$compNfse->Nfse->InfNfse = new stdClass();
$compNfse->Nfse->InfNfse->Id = '123';
$compNfse->Nfse->InfNfse->Numero = '123456'; // NÚMERICO | ATÉ 15 DIGITOS
$compNfse->Nfse->InfNfse->CodigoVerificacao = '123'; // CARACTERE | ATÉ 9 DIGITOS
$compNfse->Nfse->InfNfse->DataEmissao = '2023-03-07T15:29:00'; //
$compNfse->Nfse->InfNfse->NfseSubstituida = '123'; // NULL | NÚMERICO | ATÉ 15 DIGITOS
$compNfse->Nfse->InfNfse->OutrasInformacoes = "Informações complementares"; // NULL
$compNfse->Nfse->InfNfse->ValorCredito = 0.00; // NULL | EXEMPLO 1000.00

$compNfse->Nfse->InfNfse->ValoresNfse = new stdClass();
$compNfse->Nfse->InfNfse->ValoresNfse->BaseCalculo = 0.00;
$compNfse->Nfse->InfNfse->ValoresNfse->Aliquota = 0.00;
$compNfse->Nfse->InfNfse->ValoresNfse->ValorIss = 0.00;
$compNfse->Nfse->InfNfse->ValoresNfse->ValorLiquidoNfse = 123435.77;

$compNfse->Nfse->InfNfse->PrestadorServico = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->RazaoSocial = "Fulano de Tal";
$compNfse->Nfse->InfNfse->PrestadorServico->NomeFantasia = "Armazem";

$compNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->CpfCnpj = '12345678901';
$compNfse->Nfse->InfNfse->PrestadorServico->IdentificacaoPrestador->InscricaoMunicipal = '9876543210';

$compNfse->Nfse->InfNfse->PrestadorServico->Endereco = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Endereco = "Rua Teste";
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Numero = '22';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Complemento = 'Sem complemento';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Bairro = 'Centro';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->CodigoMunicipio = 0122;
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Uf = 'AL';
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->CodigoPais = 1001;
$compNfse->Nfse->InfNfse->PrestadorServico->Endereco->Cep = '55555555';

$compNfse->Nfse->InfNfse->PrestadorServico->Contato = new stdClass();
$compNfse->Nfse->InfNfse->PrestadorServico->Contato->Telefone = "8899999999";
$compNfse->Nfse->InfNfse->PrestadorServico->Contato->Email = 'none@mail.com';

$compNfse->Nfse->InfNfse->OrgaoGerador = new stdClass();
$compNfse->Nfse->InfNfse->OrgaoGerador->CodigoMunicipio = '1234';
$compNfse->Nfse->InfNfse->OrgaoGerador->Uf = 'AL';

$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico = new \stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps = new \stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->DataEmissao = '2023-03-08';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->Status = 1;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->Id = '1234';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Numero = '1234';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Serie = 'ABC';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->IdentificacaoRps->Tipo = 1;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Numero = '1234';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Serie = 'ABC';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Rps->RpsSubstituido->Tipo = 1;

$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Competencia = '2023-02-09'; // OK
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorServicos = 1000.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorDeducoes = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorPis = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorCofins = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorInss = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorIr = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorCsll = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->OutrasRetencoes = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValTotTributos = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->ValorIss = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->Aliquota = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->DescontoIncondicionado = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Valores->DescontoCondicionado = 0.00;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->IssRetido = 1;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->ResponsavelRetencao = 1;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->ItemListaServico = "001";
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoCnae = 123;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoTributacaoMunicipio = "001";
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoNbs = '001';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->Discriminacao = 'Conteúdo da NFS-e';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoMunicipio = 123;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->CodigoPais = '1001';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->ExigibilidadeISS = 1;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->MunicipioIncidencia = 1;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Servico->NumeroProcesso = '001';

$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Prestador = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Prestador->CpfCnpj = '12345678901';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Prestador->InscricaoMunicipal = '123456789';

$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->CpfCnpj = '12345678901';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->IdentificacaoTomador->InscricaoMunicipal = '123456789';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->NifTomador = '12345678901';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->RazaoSocial = '123456789';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Endereco = "Rua Teste";
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Numero = 'SN';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Complemento = 'Sem complemento';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Bairro = 'Centro';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoMunicipio = 0122;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Uf = 'AL';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->CodigoPais = 1001;
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Endereco->Cep = '00000000';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Contato = new stdClass();
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Contato->Telefone = "8899999999";
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->TomadorServico->Contato->Email = "none@none.com";
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario = new stdClass(); // NULL
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->RazaoSocial = 'Empresa teste'; // NULL
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->CodigoMunicipio = '1234567';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario = new stdClass(); // NULL
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->CpfCnpj = '12345678901';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Intermediario->IdentificacaoIntermediario->InscricaoMunicipal = '123456789';
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->ConstrucaoCivil = new stdClass(); // NULL
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->ConstrucaoCivil->CodigoObra = '001'; // NULL
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->ConstrucaoCivil->Art = '111'; // NULL
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->RegimeEspecialTributacao = 1; // NULL - OK
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->OptanteSimplesNacional = 1; // 1 - SIM | 2 - NÃO - OK
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->IncentivoFiscal = 2;  // 1 - SIM | 2 - NÃO - OK
$compNfse->Nfse->InfNfse->DeclaracaoPrestacaoServico->Id = '001'; // OK

$std->compNfse = $compNfse;

//$std->listamensagemretorno = new stdClass();
//$std->listamensagemretorno->mensagemRetorno = (object)[];
//
//$mensagemRetorno = new stdClass();
//$mensagemRetorno->Codigo = '001';
//$mensagemRetorno->Mensagem = '002';
//$mensagemRetorno->Correcao = '003';
//
//$std->listamensagemretorno->mensagemRetorno->{1} = $mensagemRetorno;


header("Content-type: text/xml");
$class = new ConsultaNfseRpsResposta();
$class->save($std, 'examples/xml/abrasf', 'ConsultaNfseRpsResposta');