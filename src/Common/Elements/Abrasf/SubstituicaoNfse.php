<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class SubstituicaoNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'SubstituicaoNfse')
    {
        $node = $dom->createElement($element);

        if($std->id ?? null) {
            $node->setAttribute('Id', $std->id);
        }

        PedidoCancelamento::mount($std->pedido, $dom, $node, 'Pedido');
        DeclaracaoPrestacaoServico::mount($std->rps, $dom, $node, 'Rps');

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}