<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Abrasf\Request;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf\ConsultarNfseRpsEnvio;

class ConsultaNfseRps extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        ConsultarNfseRpsEnvio::mount($this->std, $this->dom);
    }
}