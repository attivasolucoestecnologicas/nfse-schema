<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;


use NFePHP\Common\DOMImproved;

class ListaNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'ListaNfse')
    {
        $node = $dom->createElement($element);

        foreach ($std->listanfse as $item) {
            CompNfse::mount($item, $dom, $node);
        }

        if ($std->listamensagemalertaretorno ?? null) {
            ListaMensagemAlertaRetorno::mount($std->listamensagemalertaretorno, $dom, $node);
        }

        if($std->proximapagina ?? null) {
            $dom->addChild($node, 'ProximaPagina', $std->proximapagina, false);
        }

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}