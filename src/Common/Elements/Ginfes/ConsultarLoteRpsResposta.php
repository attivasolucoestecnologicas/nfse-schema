<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\ListaMensagemRetorno;
use Ativasolucoestecnologicas\Nfse\Common\Elements\ListaMensagemRetornoLote;
use NFePHP\Common\DOMImproved;

class ConsultarLoteRpsResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarLoteRpsResposta')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_consultar_lote_rps_resposta_v03.xsd");

        if($std->listanfse ?? null) {
            ListaNfse::mount($std, $dom, $node);
        }

        if($std->listamensagemretorno ?? null) {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        if($std->listamensagemretornolote ?? null) {
            ListaMensagemRetornoLote::mount($std->listamensagemretornolote, $dom, $node);
        }

        $dom->appendChild($node);
    }
}