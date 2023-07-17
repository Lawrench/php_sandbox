<?php
namespace Strings\Tests;

require('./Strings/AddBinaries.php');

use PHPUnit\Framework\TestCase;
use Strings\AddBinaries;

class AddBinariesTest extends TestCase
{
    public function testAddBinaryWithShorterInputs()
    {
        $result = AddBinaries::addBinary('10', '1');
        $this->assertSame('11', $result);

        $result = AddBinaries::addBinary('101', '10');
        $this->assertSame('111', $result);
    }

    public function testAddBinaryWithLongerInputs()
    {
        $result = AddBinaries::addBinary('111', '1110');
        $this->assertSame('10101', $result);

        $result = AddBinaries::addBinary('111111', '101');
        $this->assertSame('1000100', $result);
    }

    public function testAddBinaryWithNoInputs() {
        $result = AddBinaries::addBinary('', '');
        $this->assertSame('0', '0');
    }
}
