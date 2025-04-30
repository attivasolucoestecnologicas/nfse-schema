<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class CompNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'CompNfse')
    {
        $node = $dom->createElement($element);

        Nfse::mount($std->nfse, $dom, $node);
//        NfseCancelamento::mount($std, $dom, $node); // Não Utilizado mas só para apresentação
//        NfseSubstituicao::mount($std, $dom, $node); // Não Utilizado mas só para apresentação

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}