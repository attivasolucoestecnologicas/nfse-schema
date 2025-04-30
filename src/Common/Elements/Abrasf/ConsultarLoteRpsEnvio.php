<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

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

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        Prestador::mount($std->prestador, $dom, $node);

        $dom->addChild($node, 'Protocolo', $std->protocolo, true);

        $dom->appendChild($node);
    }
}