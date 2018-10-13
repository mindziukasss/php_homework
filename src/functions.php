<?php

namespace {

    /**
     * @param $numbers
     *
     * @return float|int
     */
    function calculateHomeWorkSum(...$numbers)
    {
        return array_sum($numbers);
    }
}

namespace Nfq\Akademija\Not_Typed {

    /**
     * @param $numbers
     *
     * @return int
     */
    function calculateHomeWorkSum(...$numbers): int
    {
        return array_sum($numbers);
    }
}

namespace Nfq\Akademija\Soft {

    /**
     * @param $numbers
     *
     * @return int
     */
    function calculateHomeWorkSum(int ...$numbers): int
    {
        return array_sum($numbers);
    }
}