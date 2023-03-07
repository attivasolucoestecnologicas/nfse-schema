<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class ValoresNfse
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('ValoresNfse');

        $dom->addChild($node, "BaseCalculo", $std->basecalculo, false);
        $dom->addChild($node, "Aliquota", $std->aliquota, false);
        $dom->addChild($node, "ValorIss", $std->valoriss, false);
        $dom->addChild($node, "ValorLiquidoNfse", $std->valorliquidonfse, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}