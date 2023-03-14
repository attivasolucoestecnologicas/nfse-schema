<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use NFePHP\Common\DOMImproved;

class RetCancelamento
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'RetCancelamento')
    {
        $node = $dom->createElement($element);

        NfseCancelamento::mount($std->nfsecancelamento, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}