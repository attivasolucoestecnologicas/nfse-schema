<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class Intermediario
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = "Intermediario")
    {
        $node = $dom->createElement($element);

        IdentificacaoPrestador::mount($std->identificacaointermediario, $dom, $node, 'IdentificacaoIntermediario');
        $dom->addChild($node, "RazaoSocial", $std->razaosocial, false);
        $dom->addChild($node, "CodigoMunicipio", $std->codigomunicipio, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}