<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class InfPedidoCancelamento
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'InfPedidoCancelamento')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);

        IdentificacaoNfse::mount($std->identificacaonfse, $dom, $node);

        $dom->addChild($node, "CodigoCancelamento", $std->codigocancelamento, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}