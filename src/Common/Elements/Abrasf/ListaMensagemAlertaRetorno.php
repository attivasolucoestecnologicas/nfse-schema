<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class ListaMensagemAlertaRetorno
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'ListaMensagemAlertaRetorno')
    {
        $node = $dom->createElement($element);

        foreach ($std->mensagemretorno as $item) {
            MensagemRetorno::mount($item, $dom, $node);
        }

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}