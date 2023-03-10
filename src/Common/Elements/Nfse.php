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
        $node->setAttribute('versao', $std->versao);

        InfNfse::mount($std->infnfse, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}