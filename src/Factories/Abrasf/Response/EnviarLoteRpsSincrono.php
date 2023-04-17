<?php

namespace Ativasolucoestecnologicas\Nfse\Factories\Abrasf\Response;

use Ativasolucoestecnologicas\Nfse\Common\Base;
use Ativasolucoestecnologicas\Nfse\Common\Elements\Abrasf\EnviarLoteRpsSincronoResposta;
use DOMNode;
use stdClass;

class EnviarLoteRpsSincrono extends Base
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
        EnviarLoteRpsSincronoResposta::mount($this->std, $this->dom);
    }
}