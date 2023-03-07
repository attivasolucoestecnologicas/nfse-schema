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

        InfRps::mount($std->rps, $dom, $node);
        $dom->addChild($node, "Competencia", $std->competencia, true);
        Servico::mount($std->servico, $dom, $node);
        IdentificacaoPrestador::mount($std->prestador, $dom, $node, 'Prestador');
        TomadorServico::mount($std->tomadorservico, $dom, $node);
        Intermediario::mount($std->intermediario, $dom, $node);
        ConstrucaoCivil::mount($std->construcaocivil, $dom, $node);
        $dom->addChild($node, "RegimeEspecialTributacao", $std->regimeespecialtributacao, false);
        $dom->addChild($node, "OptanteSimplesNacional", $std->optantesimplesnacional, true);
        $dom->addChild($node, "IncentivoFiscal", $std->incentivofiscal, true);
        $dom->addChild($node, "Id", $std->id, true);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}