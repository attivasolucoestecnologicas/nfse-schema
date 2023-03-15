<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Response;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\GerarNfseResposta;

class GerarNfse extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        GerarNfseResposta::mount($this->std, $this->dom);
    }
}