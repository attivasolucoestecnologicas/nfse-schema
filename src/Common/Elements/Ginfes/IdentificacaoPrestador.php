<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class IdentificacaoPrestador
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($std, $dom, $parent, $element = "IdentificacaoPrestador")
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "Cnpj", $std->cnpj, false);
        $dom->addChild($node, "InscricaoMunicipal", $std->inscricaomunicipal, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}