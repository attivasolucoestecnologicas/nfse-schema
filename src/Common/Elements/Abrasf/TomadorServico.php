<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class TomadorServico
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'TomadorServico')
    {
        $node = $dom->createElement($element);

        IdentificacaoPrestador::mount($std->identificacaotomador, $dom, $node, 'IdentificacaoTomador');
        if($std->niftomador ?? null) {
            $dom->addChild($node, "NifTomador", $std->niftomador, false);
        }
        $dom->addChild($node, "RazaoSocial", $std->razaosocial, false);
        Endereco::mount($std->endereco, $dom, $node);
        Contato::mount($std->contato, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}