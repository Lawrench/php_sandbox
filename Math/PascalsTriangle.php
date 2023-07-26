<?php

namespace Math;

/**
 * Class PascalsTriangle
 *
 * Generates the first n rows of Pascal's Triangle,
 * a triangular array of the binomial coefficients.
 *
 * @package Math
 */
class PascalsTriangle
{
    /**
     * Each row is an array of integers.
     * The entire triangle is an array of these rows.
     * The first and last elements of each row are always 1.
     * Each middle element is the sum of the two elements above
     * it on the previous row.
     *
     *     1
     *    1 1
     *   1 2 1
     *  1 3 3 1
     * 1 4 6 4 1
     *
     * @param int $numRows
     * @return array 2D array of the first $numRows rows.
     */
    public static function generate($numRows): array
    {
        $triangle = [];

        for ($i = 0; $i < $numRows; $i++) {
            $row = [];
            $lastRow = $i > 0 ? $triangle[$i - 1] : [];

            $row[0] = 1;
            for ($j = 1; $j < $i; $j++) {
                $row[$j] = $lastRow[$j - 1] + $lastRow[$j];
            }
            if ($i > 0) {
                $row[$i] = 1;
            }

            $triangle[] = $row;
        }

        return $triangle;
    }
}
