<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class ConsultarNfseRpsEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarNfseRpsEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        IdentificacaoRps::mount($std->identificacaorps, $dom, $node);
        Prestador::mount($std->prestador, $dom, $node);

        $dom->appendChild($node);
    }
}