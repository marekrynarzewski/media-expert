<?php

use PHPUnit\Framework\TestCase;
use Interview\Task2\Unique;

class UniqueTest extends TestCase
{
    public function test_empty(): void
    {
        $a = new Unique();
        $this->assertEquals(0, $a([]));
    }

    /**
     * @dataProvider cases
     */
    public function test_general(int $expected, array $array): void
    {
        $a = new Unique();
        $this->assertEquals($expected, $a($array));
    }

    public function cases(): array 
    {
        return [
            [1, [11, 11, 11, 11, 11]],
            [2, [20, 34, 20, 20, 34, 34, 20]],
            [5, [1, 4, 6, 3, 7, 4, 6, 3, 7, 4, 1, 6, 3]]
        ];
    }
}