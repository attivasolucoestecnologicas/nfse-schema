<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class DadosServico
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'DadosServico')
    {
        $node = $dom->createElement($element);

        Valores::mount($std->valores, $dom, $node);
        $dom->addChild($node, "ItemListaServico", $std->itemlistaservico, true);
        $dom->addChild($node, "CodigoCnae", $std->codigocnae, false);
        $dom->addChild($node, "CodigoTributacaoMunicipio", $std->codigotributacaomunicipio, false);
        $dom->addChild($node, "Discriminacao", $std->discriminacao, false);
        $dom->addChild($node, "CodigoMunicipio", $std->codigomunicipio, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}