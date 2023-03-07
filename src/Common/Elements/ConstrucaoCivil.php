<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class ConstrucaoCivil
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'ConstrucaoCivil')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "CodigoObra", $std->codigoobra, false);
        $dom->addChild($node, "Art", $std->art, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}