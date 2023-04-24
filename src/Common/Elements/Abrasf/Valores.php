<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class Valores
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'Valores')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "ValorServicos", $std->valorservicos, true);
        $dom->addChild($node, "ValorDeducoes", $std->valordeducoes, false);
        $dom->addChild($node, "ValorPis", $std->valorpis, false);
        $dom->addChild($node, "ValorCofins", $std->valorcofins, false);
        $dom->addChild($node, "ValorInss", $std->valorinss, false);
        $dom->addChild($node, "ValorIr", $std->valorir, false);
        $dom->addChild($node, "ValorCsll", $std->valorcsll, false);
        $dom->addChild($node, "OutrasRetencoes", $std->outrasretencoes, false);
        $dom->addChild($node, "ValTotTributos", $std->valtottributos, false);
        $dom->addChild($node, "ValorIss", $std->valoriss, false);
        $dom->addChild($node, "Aliquota", $std->aliquota, false);
        $dom->addChild($node, "DescontoIncondicionado", $std->descontoincondicionado, false);
        $dom->addChild($node, "DescontoCondicionado", $std->descontocondicionado, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}