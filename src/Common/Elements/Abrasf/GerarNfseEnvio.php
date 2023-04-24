<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class GerarNfseEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'GerarNfseEnvio')
    {
        $node = $dom->createElement($element);

        $children = $dom->createElement("RPS");

        InfDeclaracaoPrestacaoServico::mount($std->rps, $dom, $children);

        $node->appendChild($children);
        $dom->appendChild($node);
    }
}