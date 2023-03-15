<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Request;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\ConsultarNfseServicoTomadoEnvio;

class ConsultaNfseServicoTomado extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        ConsultarNfseServicoTomadoEnvio::mount($this->std, $this->dom);
    }
}