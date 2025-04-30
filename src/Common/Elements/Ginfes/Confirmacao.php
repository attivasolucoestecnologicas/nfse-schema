<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

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
        InfConfirmacaoCancelamento::mount($std->infconfirmacaocancelamento, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}