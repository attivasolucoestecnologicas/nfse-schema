<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf;

use NFePHP\Common\DOMImproved;

class ConsultarNfseFaixaEnvio
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'ConsultarNfseFaixaEnvio')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        Prestador::mount($std->prestador, $dom, $node);

        if ($std->faixa ?? null) {
            Faixa::mount($std->faixa, $dom, $node);
        }

        $dom->addChild($node, 'Pagina', $std->pagina, true);

        $dom->appendChild($node);
    }
}