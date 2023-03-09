<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class NfseCancelamento
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'NfseCancelamento')
    {
        $node = $dom->createElement($element);

        // TODO Não está implementado a cadeia de elementos

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}