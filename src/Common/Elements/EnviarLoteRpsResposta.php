<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class EnviarLoteRpsResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'EnviarLoteRpsResposta')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        if ($std->numerolote && $std->datarecebimento && $std->protocolo) {
            $dom->addChild($node, "NumeroLote", $std->numerolote, true);
            $dom->addChild($node, "DataRecebimento", $std->datarecebimento, true);
            $dom->addChild($node, "Protocolo", $std->protocolo, true);

        } else {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        $dom->appendChild($node);
    }
}