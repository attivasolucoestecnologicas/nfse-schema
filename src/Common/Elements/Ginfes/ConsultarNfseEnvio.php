<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\Periodo;
use NFePHP\Common\DOMImproved;

class ConsultarNfseEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarNfseEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);
        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/schemes/servico_consultar_nfse_envio_v03.xsd");

        Prestador::mount($std->prestador, $dom, $node);

        $dom->addChild($node, 'NumeroNfse', $std->numeronfse, true);

        Periodo::mount($std->periodoemissao, $dom, $node, 'PeriodoEmissao');

        \Ativasolucoestecnologicas\Nfse\Common\Elements\IdentificacaoPrestador::mount($std->tomador, $dom, $node, 'Tomador');

        IntermediarioServico::mount($std->intermediarioservico, $dom, $node);

        $dom->appendChild($node);
    }
}