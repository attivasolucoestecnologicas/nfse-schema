<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class MensagemRetorno
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'MensagemRetorno')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "Codigo", $std->codigo, true);
        $dom->addChild($node, "Mensagem", $std->mensagem, true);
        $dom->addChild($node, "Correcao", $std->correcao, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}