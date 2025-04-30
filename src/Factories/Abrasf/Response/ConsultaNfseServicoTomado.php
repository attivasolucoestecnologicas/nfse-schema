<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Abrasf\Response;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf\ConsultarNfseServicoTomadoResposta;

class ConsultaNfseServicoTomado extends Base
{
    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }

    private function mount()
    {
        ConsultarNfseServicoTomadoResposta::mount($this->std, $this->dom);
    }
}