<?php


namespace Ativasolucoestecnologicas\Nfse\Common\Elements;

use NFePHP\Common\DOMImproved;
use stdClass;

class InfDeclaracaoPrestacaoServico
{
    /**
     * @param stdClass $std
     * @param DOMImproved $dom
     * @param $parent
     */
    public static function mount($std, $dom, $parent)
    {
        $node = $dom->createElement('InfDeclaracaoPrestacaoServico');

        $dom->addChild($node, "Rps", $std->rps, false);
        $dom->addChild($node, "Competencia", $std->competencia, true);
        $dom->addChild($node, "Servico", $std->servico, true);
        $dom->addChild($node, "Prestador", $std->prestador, true);
        $dom->addChild($node, "TomadorServico", $std->tomadorservico, false);
        $dom->addChild($node, "Intermediario", $std->intermediario, false);
        $dom->addChild($node, "ConstrucaoCivil", $std->construcaocivil, false);
        $dom->addChild($node, "RegimeEspecialTributacao", $std->regimeespecialtributacao, false);
        $dom->addChild($node, "OptanteSimplesNacional", $std->optantesimplesnacional, true);
        $dom->addChild($node, "IncentivoFiscal", $std->incentivofiscal, true);
        $dom->addChild($node, "Id", $std->id, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}