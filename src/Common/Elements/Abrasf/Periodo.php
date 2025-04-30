<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class Periodo
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string$element
     */
    public static function mount($std, $dom, $parent, $element = 'Periodo')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "DataInicial", $std->datainicial, true);
        $dom->addChild($node, "DataFinal", $std->datafinal, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}