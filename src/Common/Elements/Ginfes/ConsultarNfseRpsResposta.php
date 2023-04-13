<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\ListaMensagemRetorno;
use NFePHP\Common\DOMImproved;

class ConsultarNfseRpsResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarNfseRpsResposta')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_consultar_nfse_rps_resposta_v03.xsd");

        if ($std->compnfse ?? null) {
            CompNfse::mount($std->compnfse, $dom, $node);
        }

        if ($std->listamensagemretorno ?? null) {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        $dom->appendChild($node);
    }
}