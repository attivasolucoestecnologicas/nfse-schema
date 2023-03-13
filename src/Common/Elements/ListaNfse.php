<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use NFePHP\Common\DOMImproved;

class ListaNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'ListaNfse')
    {
        $node = $dom->createElement($element);

        foreach ($std->listanfse as $item) {
            CompNfse::mount($item, $dom, $node);
        }

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}