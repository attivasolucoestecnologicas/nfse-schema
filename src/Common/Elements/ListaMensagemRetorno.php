<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use NFePHP\Common\DOMImproved;

class ListaMensagemRetorno
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'ListaMensagemRetorno')
    {
        $node = $dom->createElement($element);

        foreach ($std->mensagemretorno as $mensagem) {
            MensagemRetorno::mount($mensagem, $dom, $node);
        }

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}