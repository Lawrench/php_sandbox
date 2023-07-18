<?php
namespace Strings\Tests;

require('./Strings/Binary.php');

use PHPUnit\Framework\TestCase;
use Strings\Binary;

class AddBinariesTest extends TestCase
{
    public function testAddBinaryWithShorterInputs()
    {
        $result = Binary::add('10', '1');
        $this->assertSame('11', $result);

        $result = Binary::add('101', '10');
        $this->assertSame('111', $result);
    }

    public function testAddBinaryWithLongerInputs()
    {
        $result = Binary::add('111', '1110');
        $this->assertSame('10101', $result);

        $result = Binary::add('111111', '101');
        $this->assertSame('1000100', $result);
    }

    public function testAddBinaryWithNoInputs() {
        $result = Binary::add('', '');
        $this->assertSame('0', '0');
    }
}
