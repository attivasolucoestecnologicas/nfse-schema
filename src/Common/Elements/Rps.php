<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;
use stdClass;

class Rps
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DOMImproved $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('Rps');

        InfDeclaracaoPrestacaoServico::mount($std, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}