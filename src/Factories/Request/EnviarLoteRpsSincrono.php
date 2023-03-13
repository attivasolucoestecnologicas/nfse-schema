<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Request;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\EnviarLoteRpsEnvio;

class EnviarLoteRpsSincrono extends Base
{
    /**
     * @var \DOMNode
     */
    protected $rps;

    public function __construct(\stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }


    private function mount()
    {
        EnviarLoteRpsEnvio::mount($this->std, $this->dom, 'EnviarLoteRpsSincronoEnvio');
    }
}