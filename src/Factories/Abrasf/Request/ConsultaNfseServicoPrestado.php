<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Abrasf\Request;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf\ConsultarNfseServicoPrestadoEnvio;

class ConsultaNfseServicoPrestado extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        ConsultarNfseServicoPrestadoEnvio::mount($this->std, $this->dom);
    }
}