<?php

namespace Strings;

class AddBinaries
{

    /**
     * Manually add two binary numbers (as strings) together without bindec/decbin functions
     * This allows long binaries that PHP can't handle to be added
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public static function addBinary(string $a, string $b): string
    {
        if (strlen($a) > strlen($b)) {
            $b = str_pad($b, strlen($a), '0', STR_PAD_LEFT);
        } elseif (strlen($b) > strlen($a)) {
            $a = str_pad($a, strlen($b), '0', STR_PAD_LEFT);
        }

        $carry_dec = 0;
        $result = '';
        for ($i = strlen($a) - 1; $i >= 0; $i--) {
            $sum = (int) $a[$i] + (int) $b[$i] + $carry_dec;
            $carry_dec = ($sum == 2 || $sum == 3) ? 1 : 0;
            $result = ($sum == 1 || $sum == 3) ? '1' . $result : '0' . $result;
        }

        if ($carry_dec == 1) {
            $result = '1' . $result;
        }

        return $result;
    }
}
