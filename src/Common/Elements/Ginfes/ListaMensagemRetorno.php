<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\MensagemRetorno;
use NFePHP\Common\DOMImproved;

class ListaMensagemRetorno
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'ListaMensagemRetorno')
    {
        $node = $dom->createElement($element);

        MensagemRetorno::mount($std->mensagemretorno, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}