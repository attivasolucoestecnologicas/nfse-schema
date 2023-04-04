<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Ginfes\Response;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\EnviarLoteRpsResposta as ElementEnviarLoteRpsResposta;
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