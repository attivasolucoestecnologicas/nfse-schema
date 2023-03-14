<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class DeclaracaoPrestacaoServico
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'DeclaracaoPrestacaoServico')
    {
        $node = $dom->createElement($element);

        InfDeclaracaoPrestacaoServico::mount($std, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}