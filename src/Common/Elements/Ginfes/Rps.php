<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use NFePHP\Common\DOMImproved;

class Rps
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('Rps');

        InfRps::mount($std->infrps, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}