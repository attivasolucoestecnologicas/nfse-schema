<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class ConsultarNfseServicoPrestadoResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarNfseServicoPrestadoResposta')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        if($std->listanfse ?? null) {
            ListaNfse::mount($std, $dom, $node);
        }

        if($std->listamensagemretorno ?? null) {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        $dom->appendChild($node);
    }
}