<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


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

        $node->setAttribute('Id', $std->loterps->id);
        $node->setAttribute('versao', $std->loterps->versao);

        $dom->addChild(
            $node,
            "NumeroLote",
            $std->loterps->numerolote,
            true
        );

        CpfCnpj::mount($std->loterps->cpfcnpj, $dom, $node);

        $dom->addChild(
            $node,
            "InscricaoMunicipal",
            $std->loterps->inscricaomunicipal,
            false
        );
        $dom->addChild(
            $node,
            "QuantidadeRps",
            $std->loterps->quantidaderps,
            true
        );

        ListaRps::mount($std->loterps->listarps, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}