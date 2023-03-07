<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class Contato
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('Contato');

        $dom->addChild($node, "Telefone", $std->telefone, false);
        $dom->addChild($node, "Email", $std->email, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}