<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class NfseSubstituida
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'NfseSubstituida')
    {
        $node = $dom->createElement($element);

        CompNfse::mount($std->compnfse, $dom, $node);
        ListaMensagemAlertaRetorno::mount($std, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}