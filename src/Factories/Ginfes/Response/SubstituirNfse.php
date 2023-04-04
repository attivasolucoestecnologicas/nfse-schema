<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\SubstituirNfseResposta;

class SubstituirNfse extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        SubstituirNfseResposta::mount($this->std, $this->dom);
    }
}