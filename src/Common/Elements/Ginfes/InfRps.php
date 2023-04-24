<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\ConstrucaoCivil;
use NFePHP\Common\DOMImproved;

class InfRps
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     */
    public static function mount($std, $dom, $parent){
        $node = $dom->createElement('InfRps');

        $node->setAttribute('Id', $std->id);

        IdentificacaoRps::mount($std->identificacaorps, $dom, $node);

        $dom->addChild($node, 'DataEmissao', $std->dataemissao);
        $dom->addChild($node, 'NaturezaOperacao', $std->naturezaoperacao);
        $dom->addChild($node, 'RegimeEspecialTributacao', $std->regimeespecialtributacao);
        $dom->addChild($node, 'OptanteSimplesNacional', $std->optantesimplesnacional);
        $dom->addChild($node, 'IncentivadorCultural', $std->incentivadorcultural);
        $dom->addChild($node, 'Status', $std->status);

        RpsSubstituido::mount($std->rpssubstituido, $dom, $node);

        Servico::mount($std->servico, $dom, $node);

        Prestador::mount($std->prestador, $dom, $node);

        TomadorServico::mount($std->tomador, $dom, $node, 'Tomador');

        IntermediarioServico::mount($std->intermediarioservico, $dom, $node);

        ConstrucaoCivil::mount($std->construcaocivil, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}