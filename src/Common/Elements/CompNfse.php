<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class CompNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'CompNfse')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', 'https://wjdev.net.br/abrasf/v203/nfse.xsd');

        Nfse::mount($std->nfse, $dom, $node);
//        NfseCancelamento::mount($std, $dom, $node); // Não Utilizado mas só para apresentação
//        NfseSubstituicao::mount($std, $dom, $node); // Não Utilizado mas só para apresentação

        $dom->appendChild($node);
    }
}