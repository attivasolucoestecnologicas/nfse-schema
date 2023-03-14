<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;


use NFePHP\Common\DOMImproved;

class EnviarLoteRpsSincronoResposta
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param string $element
     */
    public static function mount($std, $dom, $element = 'EnviarLoteRpsSincronoResposta')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('xmlns', "https://wjdev.net.br/abrasf/v203/nfse.xsd");

        $dom->addChild($node, "NumeroLote", $std->numerolote, true);
        $dom->addChild($node, "DataRecebimento", $std->datarecebimento, true);
        $dom->addChild($node, "Protocolo", $std->protocolo, true);

        if ($std->listanfse ?? null) {
            ListaNfse::mount($std->listanfse, $dom, $node);
        }

        if ($std->listamensagemretorno ?? null) {
            ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);
        }

        if ($std->listamensagemretornolote ?? null) {
            ListaMensagemRetornoLote::mount($std->listamensagemretornolote, $dom, $node);
        }

        $dom->appendChild($node);
    }
}