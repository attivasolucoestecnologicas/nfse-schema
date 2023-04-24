<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class RetSubstituicao
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'RetSubstituicao')
    {
        $node = $dom->createElement($element);

        NfseSubstituida::mount($std->nfsesubstituida, $dom, $node);
        NfseSubstituidora::mount($std->nfsesubstituidora, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}