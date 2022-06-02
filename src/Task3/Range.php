<?php 

namespace Interview\Task3;

class Range
{
    public function __invoke(array $array): bool
    {
        $n = count($array);
        $range = range(1, $n);
        sort($array);
        return ($range == $array);
    }
}