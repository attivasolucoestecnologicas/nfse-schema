<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\SubstituirNfseEnvio;

class SubstituirNfse extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        SubstituirNfseEnvio::mount($this->std, $this->dom);
    }
}