<?php

namespace Ativasolucoestecnologicas\Nfse\Common;

use Ativasolucoestecnologicas\Nfse\Helpers\Helpers;

class InitGinfes
{
    private static $type;

    public function __construct($type)
    {
        self::$type = $type;
    }

    public function render(\stdClass $std = null)
    {
        $factory = new FactoryGinfes();
        $render = $factory->render(self::init($std), self::$type);
        return $render->toXml();
    }

    public function save(\stdClass $std = null, $path = '/', $name = null)
    {
        $factory = new FactoryGinfes();
        $render = $factory->render(self::init($std), self::$type);
        return $render->save($path, $name);
    }

    protected static function init(\stdClass $std = null)
    {
        if (!empty($std)) {
            return Helpers::propertiesToLower($std);
        }
        return null;
    }
}