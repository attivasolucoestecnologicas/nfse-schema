<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;

class Servico
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'Servico')
    {
        $node = $dom->createElement($element);

        Valores::mount($std->valores, $dom, $node);
        $dom->addChild($node, "IssRetido", $std->issretido, true);
        $dom->addChild($node, "ResponsavelRetencao", $std->responsavelretencao, false);
        $dom->addChild($node, "ItemListaServico", $std->itemlistaservico, true);
        $dom->addChild($node, "CodigoCnae", $std->codigocnae, false);
        $dom->addChild($node, "CodigoTributacaoMunicipio", $std->codigotributacaomunicipio, false);
        $dom->addChild($node, "CodigoNbs", $std->codigonbs, false);
        $dom->addChild($node, "Discriminacao", $std->discriminacao, true);
        $dom->addChild($node, "CodigoMunicipio", $std->codigomunicipio, true);
        $dom->addChild($node, "CodigoPais", $std->codigopais, false);
        $dom->addChild($node, "ExigibilidadeISS", $std->exigibilidadeiss, true);
        $dom->addChild($node, "MunicipioIncidencia", $std->municipioincidencia, false);
        $dom->addChild($node, "NumeroProcesso", $std->numeroprocesso, false);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}