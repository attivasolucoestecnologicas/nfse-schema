<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class Endereco
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('Endereco');

        $dom->addChild($node, "Endereco", $std->endereco, false);
        $dom->addChild($node, "Numero", $std->numero, false);
        $dom->addChild($node, "Complemento", $std->complemento, false);
        $dom->addChild($node, "Bairro", $std->bairro, true);
        $dom->addChild($node, "CodigoMunicipio", $std->codigomunicipio, true);
        $dom->addChild($node, "Uf", $std->uf, true);
        $dom->addChild($node, "CodigoPais", $std->codigopais, true);
        $dom->addChild($node, "Cep", $std->cep, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}