<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\Confirmacao;
use NFePHP\Common\DOMImproved;

class NfseCancelamento
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'NfseCancelamento')
    {
        $node = $dom->createElement($element);

        Confirmacao::mount($std->confirmacao, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}