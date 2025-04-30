<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class PedidoCancelamento
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'PedidoCancelamento')
    {
        $node = $dom->createElement($element);

        InfPedidoCancelamento::mount($std->infpedidocancelamento, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}