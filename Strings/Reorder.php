<?php

namespace Strings;

class Reorder
{
    /**
     * Reorder characters in reverse order
     * without using strrev();
     *
     * This example only loops through half of the array
     * of characters, swapping first and last with each
     * iteration.
     *
     * For comparison, here is the brute force implementation,
     * which uses more memory and is slower:
     *     for ($i = count($s) - 1; $i >= 0; $i--) {
     *         $s[] = $s[$i];
     *         unset($s[$i]);
     *     }
     *
     * @param string[] $s
     * @return void
     */
    public static function reverse(array &$s): void
    {
        $len = count($s);
        for ($i = 0; $i < $len / 2; $i++) {
            $temp = $s[$i];
            $s[$i] = $s[$len - $i - 1];
            $s[$len - $i - 1] = $temp;
        }
    }
}
