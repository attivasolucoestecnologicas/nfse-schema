<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class IdentificacaoPrestador
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('IdentificacaoPrestador');

        CpfCnpj::mount($std->cpfcnpj, $dom, $node);
        $dom->addChild($node, "InscricaoMunicipal", $std->inscricaomunicipal, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}