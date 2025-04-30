<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class ConsultarNfseServicoPrestadoEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarNfseServicoPrestadoEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        Prestador::mount($std->prestador, $dom, $node);

        $dom->addChild($node, 'NumeroNfse', $std->numeronfse, false);

        if($std->periodoemissao ?? null) {
            Periodo::mount($std->periodoemissao, $dom, $node, 'PeriodoEmissao');
        }

        if($std->periodocompetencia ?? null) {
            Periodo::mount($std->periodocompetencia, $dom, $node, 'PeriodoCompetencia');
        }

        IdentificacaoPrestador::mount($std->tomador, $dom, $node, 'Tomador');
        IdentificacaoPrestador::mount($std->intermediario, $dom, $node, 'Intermediario');

        $dom->addChild($node, 'Pagina', $std->pagina, false);

        $dom->appendChild($node);
    }
}