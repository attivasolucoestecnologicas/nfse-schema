<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class LoteRps
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'LoteRps')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);

        $dom->addChild($node, "NumeroLote", $std->numerolote, true);
        $dom->addChild($node, "Cnpj", $std->cnpj, true);
        $dom->addChild($node, "InscricaoMunicipal", $std->inscricaomunicipal, false);
        $dom->addChild($node, "QuantidadeRps", $std->quantidaderps, true);

        ListaRps::mount($std->listarps, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}