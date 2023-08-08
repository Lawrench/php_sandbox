<?php
namespace Tests;

require('./Strings/Reorder.php');

use Strings\Reorder;
use PHPUnit\Framework\TestCase;

class ReorderTest extends TestCase
{
    public function testReverseEmptyString()
    {
        $string = str_split('');
        Reorder::reverse($string);
        $this->assertEquals([], $string);
    }

    public function testReverseLongString()
    {
        $string = str_split('This is a long test string with many characters.');
        $expectedResult = str_split('.sretcarahc ynam htiw gnirts tset gnol a si sihT');
        Reorder::reverse($string);
        $this->assertEquals($expectedResult, $string);
    }

    public function testReverseNormalString()
    {
        $string = str_split('Hello World');
        $expectedResult = str_split('dlroW olleH');
        Reorder::reverse($string);
        $this->assertEquals($expectedResult, $string);
    }
}
