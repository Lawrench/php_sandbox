<?php

namespace Math;

class Stairs
{
    /**
     * Classic math problem with a well known solution. This is my implementation.
     * Given n steps to reach the top, taking 1 or 2 steps at a time.
     * How many ways can you climb to the top?
     *
     * Fibonacci sequence. The number of ways to reach the nth step is the
     * sum of the number of ways to reach the (n-1)th step and the (n-2)th step.
     *
     * @param int $steps
     * @return int
     */
        public static function climb(int $steps) : int {
        if ($steps <= 2) {
            return $steps;
        }

        $oneStepBefore = 2;
        $twoStepsBefore = 1;
        $allWays = 0;

        for ($i = 2; $i < $steps; $i++) {
            $allWays = $oneStepBefore + $twoStepsBefore;
            $twoStepsBefore = $oneStepBefore;
            $oneStepBefore = $allWays;
        }

        return $allWays;
    }
}
