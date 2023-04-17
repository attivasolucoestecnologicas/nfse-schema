<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class ConsultaSituacaoLoteRpsResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarSituacaoLoteRpsResposta')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_consultar_situacao_lote_rps_resposta_v03.xsd");

        if($std->numerolote ?? null) {
            $dom->addChild($node, "NumeroLote", $std->numerolote, true);
            $dom->addChild($node, "DataRecebimento", $std->datarecebimento, true);
            $dom->addChild($node, "Protocolo", $std->protocolo, true);
        }

        if ($std->listamensagemretorno ?? null) {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        $dom->appendChild($node);
    }
}