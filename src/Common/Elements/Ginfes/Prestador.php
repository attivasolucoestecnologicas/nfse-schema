<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

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

        Cnpj::mount($std->cpfcnpj, $dom, $node);
        $dom->addChild($node, "InscricaoMunicipal", $std->inscricaomunicipal, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}