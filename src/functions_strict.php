<?php

declare(strict_types=1);

namespace Nfq\Akademija\Strict {

    /**
     * @param $numbers
     *
     * @return int
     */
    function calculateHomeworkSum(int...$numbers): int
    {
        return calculate($numbers);
    }

    /**
     * @param $numbers
     *
     * @return int
     */
    function calculate(int...$numbers): int
    {
        return array_sum($numbers);
    }
}