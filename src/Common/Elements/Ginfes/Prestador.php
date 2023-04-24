<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\CpfCnpj;
use NFePHP\Common\DOMImproved;

class Prestador
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string$element
     */
    public static function mount($std, $dom, $parent, $element = 'Prestador')
    {
        $node = $dom->createElement($element);

        if($std->cnpj ?? null) {
            Cnpj::mount($std->cnpj, $dom, $node);
        }
        if($std->cpfcnpj ?? null) {
            CpfCnpj::mount($std->cpfcnpj, $dom, $node);
        }
        $dom->addChild($node, "InscricaoMunicipal", $std->inscricaomunicipal, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}