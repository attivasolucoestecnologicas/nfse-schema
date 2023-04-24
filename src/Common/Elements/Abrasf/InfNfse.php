<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class InfNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'InfNfse')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);

        $dom->addChild(
            $node,
            "Numero",
            $std->numero,
            true
        );
        $dom->addChild(
            $node,
            "CodigoVerificacao",
            $std->codigoverificacao,
            true
        );
        $dom->addChild(
            $node,
            "DataEmissao",
            $std->dataemissao,
            true
        );
        $dom->addChild(
            $node,
            "NfseSubstituida",
            $std->nfsesubstituida,
            false
        );
        $dom->addChild(
            $node,
            "OutrasInformacoes",
            $std->outrasinformacoes,
            false
        );

        ValoresNfse::mount($std->valoresnfse, $dom, $node);

        $dom->addChild(
            $node,
            "ValorCredito",
            $std->valorcredito,
            false
        );

        PrestadorServico::mount($std->prestadorservico, $dom, $node);

        OrgaoGerador::mount($std->orgaogerador, $dom, $node);

        DeclaracaoPrestacaoServico::mount($std->declaracaoprestacaoservico, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}