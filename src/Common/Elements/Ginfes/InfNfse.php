<?php

namespace Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes;

use Ativasolucoestecnologicas\Nfse\Common\Elements\ConstrucaoCivil;
use Ativasolucoestecnologicas\Nfse\Common\Elements\IdentificacaoRps;
use Ativasolucoestecnologicas\Nfse\Common\Elements\OrgaoGerador;
use Ativasolucoestecnologicas\Nfse\Common\Elements\TomadorServico;
use NFePHP\Common\DOMImproved;

class InfNfse
{
    /**
     * @param \stdClass $std
     * @param DOMImproved $dom
     * @param \DOMNode $parent
     * @param string $element
     */
    public static function mount($std, $dom, $parent, $element = 'InfNfse')
    {
        $node = $dom->createElement($element);

        $node->setAttribute('Id', $std->id);

        $dom->addChild($node, "Numero", $std->numero, true);
        $dom->addChild($node, "CodigoVerificacao", $std->codigoverificacao, true);
        $dom->addChild($node, "DataEmissao", $std->dataemissao, true);

        if ($std->identificacaorps) {
            IdentificacaoRps::mount($std->identificacaorps, $dom, $node); // Montar
        }

        $dom->addChild($node, "DataEmissaoRps", $std->dataemissaorps, false);
        $dom->addChild($node, "NaturezaOperacao", $std->naturezaoperacao, true);
        $dom->addChild($node, "RegimeEspecialTributacao", $std->regimeespecialtributacao, false);
        $dom->addChild($node, "OptanteSimplesNacional", $std->optantesimplesnacional, true);
        $dom->addChild($node, "IncentivadorCultural", $std->incentivadorcultural, true);
        $dom->addChild($node, "Competencia", $std->competencia, true);
        $dom->addChild($node, "NfseSubstituida", $std->nfsesubstituida, false);
        $dom->addChild($node, "OutrasInformacoes", $std->outrasinformacoes, false);

        DadosServico::mount($std->servico, $dom, $node, 'Servico');

        $dom->addChild($node, "ValorCredito", $std->valorcredito, false);

        PrestadorServico::mount($std->prestadorservico, $dom, $node);

        TomadorServico::mount($std->tomadorservico, $dom, $node);

        IntermediarioServico::mount($std->intermediarioservico, $dom, $node);

        OrgaoGerador::mount($std->orgaogerador, $dom, $node);

        ConstrucaoCivil::mount($std->construcaocivil, $dom, $node);

        $parent->appendChild($node);
        $dom->appendChild($parent);
    }
}