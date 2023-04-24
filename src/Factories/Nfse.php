<?php

namespace Ativasolucoestecnologicas\Nfse\Factories;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf\CompNfse;
use DOMNode;
use stdClass;

class Nfse extends Base
{
    /**
     * @var DOMNode
     */
    protected $nfse;

    public function __construct(stdClass $std)
    {
        parent::__construct($std);
//        $this->nfse = $this->dom->createElement('Nfse');
        $this->mount();
    }

    private function mount()
    {

//        Cabecalho::mount($this->std->cabecalho, $this->dom);
        CompNfse::mount($this->std->compnfse, $this->dom);
//        $infRps = $this->dom->createElement('InfNfse');


//        $this->nfse->appendChild($infRps);
//
//        $this->dom->addChild($this->nfse, 'versao', $this->std->versao, true);
//
//        $this->dom->appendChild($this->nfse);
    }
}