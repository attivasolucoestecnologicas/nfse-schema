<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\IdentificacaoRps;
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

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_consultar_nfse_rps_envio_v03.xsd");

        IdentificacaoRps::mount($std->identificacaorps, $dom, $node);
        Prestador::mount($std->prestador, $dom, $node);

        $dom->appendChild($node);
    }
}