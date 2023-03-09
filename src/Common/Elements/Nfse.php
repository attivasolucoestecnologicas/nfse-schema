<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class Nfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'Nfse')
    {
        $node = $dom->createElement($element);

        InfNfse::mount($std->infnfse, $dom, $node);
        $dom->addChild($node, "versao", $std->versao, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}