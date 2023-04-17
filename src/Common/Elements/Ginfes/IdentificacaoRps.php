<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class IdentificacaoRps
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'IdentificacaoRps')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "Numero", $std->numero, true);
        $dom->addChild($node, "Serie", $std->serie, true);
        $dom->addChild($node, "Tipo", $std->tipo, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}