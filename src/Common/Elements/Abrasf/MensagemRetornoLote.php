<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class MensagemRetornoLote
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'MensagemRetornoLote')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "IdentificacaoRps", $std->identificacaorps, true);
        $dom->addChild($node, "Codigo", $std->codigo, true);
        $dom->addChild($node, "Mensagem", $std->mensagem, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}