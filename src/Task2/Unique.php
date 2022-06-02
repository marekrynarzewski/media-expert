<?php

namespace Interview\Task2;

class Unique 
{
    public function __invoke(array $array): int 
    {
        $result = 0;
        $unique = [];
        foreach ($array as $item) {
            if (!in_array($item, $unique)) {
                $unique[] = $item;
                $result += 1;
            }
        }

        return $result;
    }
}