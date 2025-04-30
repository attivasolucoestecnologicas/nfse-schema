<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes\CancelarNfseEnvio;

class CancelarNfse extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }


    private function mount()
    {
        CancelarNfseEnvio::mount($this->std, $this->dom);
    }
}