<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;
use NFePHP\Common\DOMImproved as Dom;

abstract class Base
{
    /**
     * @var \stdClass
     */
    protected $std;

    /**
     * @var Dom
     */
    protected $dom;

    public function __construct(\stdClass $std)
    {
        $this->std = $std;

        $this->dom = new Dom('1.0', 'UTF-8');
        $this->dom->preserveWhiteSpace = false;
        $this->dom->formatOutput = false;
    }

    public function toString()
    {
        return str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $this->dom->saveXML());
    }

    public function toXml()
    {
        return $this->dom->saveXML();
    }

    public function save($path = '/tmp')
    {
        $filePath = Helpers::save($this, $path);
        $result = $this->dom->save($filePath);
        if ($result !== false) {
            return true;
        }
        return false;
    }
}