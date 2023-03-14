<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use NFePHP\Common\DOMImproved;

class Confirmacao
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'Confirmacao')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);

        PedidoCancelamento::mount($std->pedido, $dom, $node, 'Pedido');
        $dom->addChild($node, "DataHora", $std->datahora, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}