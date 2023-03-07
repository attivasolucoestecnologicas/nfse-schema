<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class OrgaoGerador
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('OrgaoGerador');

        $dom->addChild($node, "CodigoMunicipio", $std->codigomunicipio, true);
        $dom->addChild($node, "Uf", $std->uf, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}