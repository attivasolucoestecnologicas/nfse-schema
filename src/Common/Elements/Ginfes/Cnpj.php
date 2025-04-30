<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;
use NFePHP\Common\DOMImproved;

class Cnpj
{
    /**
     * @param string|numeric|null $value
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string $element
     */
    public static function mount($value, $dom, $parent, $element = 'Cnpj')
    {
        $value = Helpers::strNumber($value);
        $node = $dom->createElement($element, $value);
        $parent->appendChild($node);
    }
}