<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use NFePHP\Common\DOMImproved;

class IdentificacaoNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'IdentificacaoNfse')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "Numero", $std->numero, true);
        CpfCnpj::mount($std->cpfcnpj, $dom, $node);
        $dom->addChild($node, "InscricaoMunicipal", $std->inscricaomunicipal, false);
        $dom->addChild($node, "CodigoMunicipio", $std->codigomunicipio, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}