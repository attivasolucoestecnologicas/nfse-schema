<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class Faixa
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string$element
     */
    public static function mount($std, $dom, $parent, $element = 'Faixa')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "NumeroNfseInicial", $std->numeronfseinicial, true);
        $dom->addChild($node, "NumeroNfseFinal", $std->numeronfsefinal, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}