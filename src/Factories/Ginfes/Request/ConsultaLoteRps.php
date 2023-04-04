<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Request;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\ConsultarLoteRpsEnvio;

class ConsultaLoteRps extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        ConsultarLoteRpsEnvio::mount($this->std, $this->dom);
    }
}