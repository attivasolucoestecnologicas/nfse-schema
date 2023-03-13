<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Response;

use Ativasolucoestecnologicas\Nfse\Common\Elements\EnviarLoteRpsResposta as ElementEnviarLoteRpsResposta;
use Ativasolucoestecnologicas\Nfse\Common\Base;
use DOMNode;
use stdClass;

class EnviarLoteRps extends Base
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
        ElementEnviarLoteRpsResposta::mount($this->std, $this->dom);
    }
}