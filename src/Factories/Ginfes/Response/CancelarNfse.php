<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Ginfes\CancelarNfseResposta;

class CancelarNfse extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        CancelarNfseResposta::mount($this->std, $this->dom);
    }
}