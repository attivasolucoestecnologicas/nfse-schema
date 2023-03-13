<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class ListaMensagemRetornoLote
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'ListaMensagemRetornoLote')
    {
        $node = $dom->createElement($element);

        foreach ($std->mensagemretorno as $mensagem) {
            MensagemRetornoLote::mount($mensagem, $dom, $node, 'MensagemRetorno');
        }

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}