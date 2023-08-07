<?php

namespace Tests;

require ('./Strings/SlidingWindow.php');

use PHPUnit\Framework\TestCase;
use Strings\SlidingWindow;

class SlidingWindowTest extends TestCase
{
    /**
     * Test method for basic inputs.
     * @dataProvider provideTestCases
     */
    public function testLongestSubstring($input, $expected)
    {
        $result = SlidingWindow::longestSubstring($input);
        $this->assertEquals($expected, $result);
    }

    /**
     * Data provider for test cases.
     */
    public function provideTestCases()
    {
        return [
            ["abcabcbb", 3],
            ["bbbbb", 1],
            ["gttkwt", 3],
            ["", 0],
            ["a", 1],
            ["aab", 2],
            ["abcde", 5],
            ["aaabbb", 2],
            [str_repeat("a", 1000) . "b", 2],
            ["a1b1c1d1", 3],
            ["@@!!", 2],
        ];
    }
}
