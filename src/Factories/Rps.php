<?php

namespace Ativasolucoestecnologicas\Nfse\Factories;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\CpfCnpj;
use Ativasolucoestecnologicas\Nfse\Common\Elements\ListaRps;
use DOMNode;
use stdClass;

class Rps extends Base
{
    /**
     * @var DOMNode
     */
    protected $rps;

    public function __construct(stdClass $std)
    {
        parent::__construct($std);
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
}