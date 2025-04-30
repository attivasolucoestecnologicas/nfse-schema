<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;


use NFePHP\Common\DOMImproved;

class InfConfirmacaoCancelamento
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DomNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'InfConfirmacaoCancelamento')
    {
        $node = $dom->createElement($element);

        $dom->addChild($node, "Sucesso", $std->sucesso, false);
        $dom->addChild($node, "DataHora", $std->datahora, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}