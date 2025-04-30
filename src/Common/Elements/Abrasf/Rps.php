<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class Rps
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DOMNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('Rps');

        InfDeclaracaoPrestacaoServico::mount($std, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}