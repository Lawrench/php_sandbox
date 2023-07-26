<?php

namespace Strings;

class Palindrome
{
    /**
     * Determine if a string is a palindrome.
     * This is an easy, classic problem, but many
     * programmers don't find the optimized solution
     * right away.
     *
     * @param String $string
     * @return Boolean
     */
    public static function isPalindrome(string $string): bool
    {
        // NOTE: The least efficient way to do this is to loop through half of the string,
        // and compare each character to the other half.
        // However, this is not a good solution.
        // $s = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $s));
        // $len = strlen($s);
        // for ($i = 0; $i < (int) $len / 2; $i++) {
        //     if ($s[$i] != $s[$len - $i - 1]) {
        //         return false;
        //     }
        // }
        // return true;

        $string = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
        $len = strlen($string);
        $half = round($len / 2, 0, PHP_ROUND_HALF_DOWN);

        if ( substr($string, 0, $half) != strrev(substr($string, -1 * $half, $half)) ) {
            return false;
        }

        return true;
    }
}
