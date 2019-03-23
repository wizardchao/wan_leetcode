<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function search($nums, $target)
    {
        $left = 0;
        $right = count($nums) - 1;
        while ($left <= $right) {
            $mid = $left + (int)(($right - $left) / 2);
            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($nums[$mid] < $nums[$right]) {
                if ($nums[$mid] < $target && $nums[$right] >= $target) {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
            } else {
                if ($nums[$left] <= $target && $nums[$mid] > $target) {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
            }
        }
        return -1;
    }
}
