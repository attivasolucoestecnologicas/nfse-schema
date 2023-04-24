<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\Contato;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Endereco;
use \DOMNode;
use \NFePHP\Common\DOMImproved;
use \stdClass;

class PrestadorServico
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'PrestadorServico')
    {
        $node = $dom->createElement($element);

        IdentificacaoPrestador::mount($std->identificacaoprestador, $dom, $node);
        $dom->addChild($node, "RazaoSocial", $std->razaosocial, true);
        $dom->addChild($node, "NomeFantasia", $std->nomefantasia, false);
        Endereco::mount($std->endereco, $dom, $node);
        Contato::mount($std->contato, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}