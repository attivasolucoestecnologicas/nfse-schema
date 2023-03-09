<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

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

        LoteRps::mount($std->enviarloterpsenvio, $dom, $node);

        $dom->appendChild($node);
    }
}