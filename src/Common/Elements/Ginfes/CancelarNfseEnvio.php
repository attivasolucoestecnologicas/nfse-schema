<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class CancelarNfseEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'CancelarNfseEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_cancelar_nfse_envio_v03.xsd");

        PedidoCancelamento::mount($std->pedido, $dom, $node, 'Pedido');

        $dom->appendChild($node);
    }
}