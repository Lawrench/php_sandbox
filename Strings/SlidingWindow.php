<?php

namespace Strings;

class SlidingWindow
{
    /**
     * Returns the length of the longest substring without repeating characters.
     *
     * Sliding window technique involves two pointers (start and end)
     * that are the substring being checked. Characters are added
     * to a set to track unique characters. When a repeated character
     * is found, the start pointer is moved forward, 'sliding' the window.
     *
     * For comparison, a brute force technique can be demonstrated as:
     * ```
     * for ($i = 0; $i < strlen($s); $i++) {
     *     for ($j = $i; $j < strlen($s); $j++) {
     *         // Check for unique characters
     *     }
     * }
     *
     * Brute force method checks each possible substring with a worst case
     * complexity of O(n^2).
     *
     * @param String $s The input string.
     * @return Integer The length of the longest substring without repeating characters.
     */
    public static function longestSubstring($s) {
        $start = 0;
        $maxLength = 0;
        $seen = [];

        for ($end = 0; $end < strlen($s); $end++) {
            $char = $s[$end];
            while (isset($seen[$char])) {
                unset($seen[$s[$start]]);
                $start++;
            }
            $seen[$char] = true;
            $maxLength = max($maxLength, $end - $start + 1);
        }

        return $maxLength;
    }
}
