<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class Cancelamento
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'Cancelamento')
    {
        $node = $dom->createElement($element);

        Confirmacao::mount($std->confirmacao, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}