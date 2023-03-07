<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class Servico
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'Servico')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "Numero", $std->numero, false);
        $dom->addChild($node, "Serie", $std->serie, false);
        $dom->addChild($node, "Tipo", $std->tipo, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}