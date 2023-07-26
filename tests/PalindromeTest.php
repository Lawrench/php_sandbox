<?php

namespace Tests;

require('./Strings/Palindrome.php');

use PHPUnit\Framework\TestCase;
use Strings\Palindrome;

class PalindromeTest extends TestCase
{
    public function testIsPalindrome(): void
    {
        $this->assertTrue(Palindrome::isPalindrome(''));
        $this->assertTrue(Palindrome::isPalindrome('a'));
        $this->assertTrue(Palindrome::isPalindrome('A man, a plan, a canal: Panama'));
        $this->assertTrue(Palindrome::isPalindrome('race car'));
        $this->assertFalse(Palindrome::isPalindrome('hello'));
        $this->assertFalse(Palindrome::isPalindrome('world'));
    }
}
