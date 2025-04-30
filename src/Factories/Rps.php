<?php

namespace Ativasolucoestecnologicas\Nfse\Factories;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf\EnviarLoteRpsEnvio;
use DOMNode;
use stdClass;

class Rps extends Base
{
    /**
     * @var DOMNode
     */
    protected $rps;

    public function __construct(stdClass $std)
    {
        parent::__construct($std);
        $this->mount();
    }


    private function mount()
    {
        EnviarLoteRpsEnvio::mount($this->std, $this->dom);
    }
}