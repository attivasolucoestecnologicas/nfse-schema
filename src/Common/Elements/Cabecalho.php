<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class Cabecalho
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'cabecalho')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "versaoDados", $std->versaodados, false);
        $dom->addChild($node, "versao", $std->versao, true);

//        $parent->appendChild($node);
        $dom->appendChild($node);
    }
}