<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\ListaMensagemRetorno;
use NFePHP\Common\DOMImproved;

class CancelarNfseResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'CancelarNfseResposta')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_cancelar_nfse_resposta_v03.xsd");

        if ($std->cancelamento ?? null) {
            Cancelamento::mount($std->cancelamento, $dom, $node);
        }

        if ($std->listamensagemretorno ?? null) {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        $dom->appendChild($node);
    }
}