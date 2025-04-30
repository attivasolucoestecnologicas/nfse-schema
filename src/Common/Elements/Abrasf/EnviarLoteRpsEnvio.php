<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class EnviarLoteRpsEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'EnviarLoteRpsEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        LoteRps::mount($std->enviarloterpsenvio, $dom, $node);

        $dom->appendChild($node);
    }
}