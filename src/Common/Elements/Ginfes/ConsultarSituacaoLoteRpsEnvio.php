<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\ListaMensagemRetorno;
use NFePHP\Common\DOMImproved;

class ConsultarSituacaoLoteRpsEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarSituacaoLoteRpsEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_consultar_situacao_lote_rps_envio_v03.xsd");
        $node->setAttribute('Id', $std->id);

        IdentificacaoPrestador::mount($std->prestador, $dom, $node, 'Prestador');
        $dom->addChild($node,'Protocolo', $std->protocolo, true);

        $dom->appendChild($node);
    }
}