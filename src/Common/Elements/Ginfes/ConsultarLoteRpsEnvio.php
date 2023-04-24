<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class ConsultarLoteRpsEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarLoteRpsEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);
        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_consultar_lote_rps_envio_v03.xsd");

        Prestador::mount($std->prestador, $dom, $node);

        $dom->addChild($node, 'Protocolo', $std->protocolo, true);

        $dom->appendChild($node);
    }
}