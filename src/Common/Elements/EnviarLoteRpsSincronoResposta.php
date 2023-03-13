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

        ListaNfse::mount($std->listanfse, $dom, $node);

        ListaMensagemRetorno::mount($std->listamensagemretorno, $dom, $node);

        ListaMensagemRetornoLote::mount($std->listamensagemretornolote, $dom, $node);

        $dom->appendChild($node);
    }
}