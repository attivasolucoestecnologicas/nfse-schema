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

        $dom->addChild(
            $node,
            "Id",
            $std->loterps->id,
            true
        );

        $dom->addChild(
            $node,
            "versao",
            $std->loterps->versao,
            true
        );

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}