<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function maxArea($height)
    {
        $len=COUNT($height);
        if ($len<=1) {
            return 0;
        }
        $ans=$l=0;
        $r=$len-1;
        while ($l<$r) {
            $v=($r-$l)*min($height[$l], $height[$r]);
            if ($v > $ans) {
                $ans = $v;
            }
            if ($height[$l] < $height[$r]) {
                $l++;
            } else {
                $r--;
            }
        }
        return $ans;
    }
}
