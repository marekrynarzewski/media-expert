<?php

use Interview\Task3\Range;
use PHPUnit\Framework\TestCase;

class RangeTest extends TestCase
{

    /**
     * @dataProvider trueCases
     */
    public function test_true(array $array): void
    {
        $a = new Range();
        $this->assertTrue($a($array));
    }

    /**
     * @dataProvider falseCases
     */
    public function test_false(array $array): void
    {
        $a = new Range();
        $this->assertFalse($a($array));
    }


    public function trueCases(): array
    {
        return [
            [
                [1, 2, 3, 6, 7, 5, 4, 8, 9],
            ],
            [
                [1, 5, 3, 2, 4],
            ],
        ];
    }

    public function falseCases(): array
    {
        return [
            [
                [1, 4, 3, 5, 7, 3, 5, 2, 4],
            ]
        ];
    }
}