<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use DOMNode;
use NFePHP\Common\DOMImproved;
use stdClass;

class InfRps
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param DOMNode $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('Rps');
        $node->setAttribute('Id', $std->id);

        IdentificacaoRps::mount($std->identificacaorps, $dom, $node);
        $dom->addChild($node, "DataEmissao", $std->dataemissao, true);
        $dom->addChild($node, "Status", $std->status, true);
        RpsSubstituido::mount($std->rpssubstituido, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}