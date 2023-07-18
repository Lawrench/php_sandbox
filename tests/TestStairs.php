<?php

namespace Tests;

require ('./Math/Stairs.php');

use Math\Stairs;
use PHPUnit\Framework\TestCase;

class StairsTest extends TestCase
{
    public function testClimb()
    {
        $fibonacci = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];
        for ($i = 1; $i <= 10; $i++) {
            $this->assertEquals($fibonacci[$i - 1], Stairs::climb($i));
        }
    }
}
