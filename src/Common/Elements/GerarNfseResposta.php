<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use NFePHP\Common\DOMImproved;

class GerarNfseResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'GerarNfseResposta')
    {
        $node = $dom->createElement($element);

        if($std->listanfse) {
            ListaNfse::mount($std->listanfse, $dom, $node);
        }
        if($std->listamensagemretorno) {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        $dom->appendChild($node);
    }
}