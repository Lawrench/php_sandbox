<?php

namespace Tests;

require('./Math/PascalsTriangle.php');

use Math\PascalsTriangle;
use PHPUnit\Framework\TestCase;

class PascalsTriangleTest extends TestCase
{
    public function testGenerate()
    {
        $expected = [
            [1],
            [1, 1],
            [1, 2, 1],
            [1, 3, 3, 1],
            [1, 4, 6, 4, 1],
        ];
        $this->assertEquals($expected, PascalsTriangle::generate(5));

        $expected = [[1],];

        $this->assertEquals($expected, PascalsTriangle::generate(1));

        $expected = [];
        $this->assertEquals($expected, PascalsTriangle::generate(0));
    }
}
