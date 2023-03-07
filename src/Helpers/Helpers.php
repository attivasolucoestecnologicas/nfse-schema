<?php

namespace Ativasolucoestecnologicas\Nfse\Helpers;

use stdClass;

class Helpers
{
    /**
     * Change properties names of stdClass to lower case
     * @param stdClass $data
     * @return stdClass
     */
    public static function propertiesToLower(stdClass $data)
    {
        $properties = get_object_vars($data);
        $clone = new stdClass();
        foreach ($properties as $key => $value) {
            if ($value instanceof stdClass) {
                $value = self::propertiesToLower($value);
            }
            $nk = strtolower($key);
            $clone->{$nk} = $value;
        }
        return $clone;
    }
}