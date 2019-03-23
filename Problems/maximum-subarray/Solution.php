<?php

namespace Solution;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $len = count($nums);
        if ($len == 0) {
            return 0;
        }
        $dp = [];
        $dp[0] = $nums[0];
        for ($i = 1; $i < $len; ++$i) {
            $dp[$i] = max($nums[$i], $dp[$i - 1] + $nums[$i]);
        }

        $res = $dp[0];
        for ($i = 1; $i < $len; ++$i) {
            $res = max($res,$dp[$i]);
        }
        return $res;
    }
}
