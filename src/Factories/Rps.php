<?php

namespace Ativasolucoestecnologicas\Nfse\Factories;

use Ativasolucoestecnologicas\Nfse\Common\Elements\CpfCnpj;
use Ativasolucoestecnologicas\Nfse\Common\Elements\ListaRps;
use DOMNode;
use NFePHP\Common\DOMImproved as Dom;
use stdClass;

class Rps
{
    /**
     * @var stdClass
     */
    protected $std;
    /**
     * @var string
     */
    protected $ver;
    /**
     * @var string
     */
    protected $jsonschema;

    /**
     * @var Dom
     */
    protected $dom;

    /**
     * @var DOMNode
     */
    protected $rps;

    public function __construct(stdClass $std)
    {
        $this->std = $std;

        $this->dom = new Dom('1.0', 'UTF-8');
        $this->dom->preserveWhiteSpace = false;
        $this->dom->formatOutput = false;
        $this->rps = $this->dom->createElement('EnviarLoteRpsEnvio');

        $this->mount();
    }


    private function mount()
    {
        $infRps = $this->dom->createElement('LoteRps');

        $this->dom->addChild(
            $infRps,
            "NumeroLote",
            $this->std->identificacaorps->numerolote,
            true
        );

        CpfCnpj::mount($this->std->identificacaorps->cpfcnpj, $this->dom, $infRps);

        $this->dom->addChild(
            $infRps,
            "InscricaoMunicipal",
            $this->std->identificacaorps->inscricaomunicipal,
            false
        );
        $this->dom->addChild(
            $infRps,
            "QuantidadeRps",
            $this->std->identificacaorps->quantidaderps,
            true
        );

        ListaRps::mount($this->std->listarps, $this->dom, $infRps);

        $this->dom->addChild(
            $infRps,
            "Id",
            $this->std->identificacaorps->id,
            true
        );

        $this->dom->addChild(
            $infRps,
            "versao",
            $this->std->identificacaorps->versao,
            true
        );

        $this->rps->appendChild($infRps);
        $this->dom->appendChild($this->rps);
    }

    public function toString()
    {
//        $this->mount();
        return str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $this->dom->saveXML());
    }

    public function toXml()
    {
//        $this->mount();
        return $this->dom->saveXML();
    }
}