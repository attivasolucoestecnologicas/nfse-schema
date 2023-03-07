<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;
use stdClass;

class ListaRps
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DOMImproved $parent
     */
    public static function mount($std, $dom, &$parent)
    {
        $node = $dom->createElement('ListaRps');

        foreach ($std->rps as $rps) {
            Rps::mount($rps, $dom, $node);
        }

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}