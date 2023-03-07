<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class PrestadorServico
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('PrestadorServico');

        IdentificacaoPrestador::mount($std->identificacaoprestador, $dom, $node);
        $dom->addChild($node, "RazaoSocial", $std->razaosocial, true);
        $dom->addChild($node, "NomeFantasia", $std->nomefantasia, false);
        Endereco::mount($std->endereco, $dom, $node);
        Contato::mount($std->contato, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}