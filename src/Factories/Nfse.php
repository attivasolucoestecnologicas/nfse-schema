<?php

namespace Ativasolucoestecnologicas\Nfse\Factories;

use Ativasolucoestecnologicas\Nfse\Common\Elements\DeclaracaoPrestacaoServico;
use Ativasolucoestecnologicas\Nfse\Common\Elements\OrgaoGerador;
use Ativasolucoestecnologicas\Nfse\Common\Elements\PrestadorServico;
use Ativasolucoestecnologicas\Nfse\Common\Elements\ValoresNfse;
use DOMNode;
use NFePHP\Common\DOMImproved as Dom;
use stdClass;

class Nfse
{
    /**
     * @var stdClass
     */
    protected $std;

    /**
     * @var Dom
     */
    protected $dom;

    /**
     * @var DOMNode
     */
    protected $nfse;

    public function __construct(stdClass $std)
    {
        $this->std = $std;

        $this->dom = new Dom('1.0', 'UTF-8');
        $this->dom->preserveWhiteSpace = false;
        $this->dom->formatOutput = false;
        $this->nfse = $this->dom->createElement('Nfse');
        $this->mount();
    }


    private function mount()
    {
        $infRps = $this->dom->createElement('InfNfse');

        $this->dom->addChild(
            $infRps,
            "Numero",
            $this->std->numero,
            true
        );
        $this->dom->addChild(
            $infRps,
            "CodigoVerificacao",
            $this->std->codigoverificacao,
            true
        );
        $this->dom->addChild(
            $infRps,
            "DataEmissao",
            $this->std->dataemissao,
            true
        );
        $this->dom->addChild(
            $infRps,
            "NfseSubstituida",
            $this->std->nfsesubstituida,
            false
        );
        $this->dom->addChild(
            $infRps,
            "OutrasInformacoes",
            $this->std->outrasinformacoes,
            false
        );

        ValoresNfse::mount($this->std->valoresnfse, $this->dom, $infRps);

        $this->dom->addChild(
            $infRps,
            "ValorCredito",
            $this->std->valorcredito,
            false
        );

        PrestadorServico::mount($this->std->prestadorservico, $this->dom, $infRps);

        OrgaoGerador::mount($this->std->orgaogerador, $this->dom, $infRps);

        DeclaracaoPrestacaoServico::mount($this->std->declaracaoprestacaoservico, $this->dom, $infRps);

        $this->dom->addChild(
            $infRps,
            "Id",
            $this->std->id,
            true
        );

        $this->nfse->appendChild($infRps);

        $this->dom->addChild($this->nfse, 'versao', $this->std->versao, true);

        $this->dom->appendChild($this->nfse);
    }

    public function toString()
    {
        return str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $this->dom->saveXML());
    }

    public function toXml()
    {
        return $this->dom->saveXML();
    }
}