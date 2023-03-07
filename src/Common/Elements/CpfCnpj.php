<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;
use DOMNode;
use NFePHP\Common\DOMImproved;

class CpfCnpj
{
    /**
     * @param string|numeric|null $value
     * @param DOMImproved $dom
     * @param DomNode $parent
     */
    public static function mount($value, $dom, $parent)
    {
        $node = $dom->createElement('CpfCnpj');

        $value = Helpers::strNumber($value);

        $label = strlen($value) == 11 ? 'Cpf' : 'Cnpj';

        $dom->addChild($node, $label, $value, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}