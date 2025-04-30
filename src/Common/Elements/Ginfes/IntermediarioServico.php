<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\CpfCnpj;
use NFePHP\Common\DOMImproved;

class IntermediarioServico
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = "IntermediarioServico")
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "RazaoSocial", $std->razaosocial, false);
        CpfCnpj::mount($std->cpfcnpj, $dom, $node);
        $dom->addChild($node, "InscricaoMunicipal", $std->inscricaomunicipal, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}