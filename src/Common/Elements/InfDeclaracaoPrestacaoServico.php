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
     * @param string $element
     */
    public static function mount($std, $dom, $parent, string $element = 'InfDeclaracaoPrestacaoServico')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);

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

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}