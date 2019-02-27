<?php
namespace Solution;
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum($nums)
    {
        $len=count($nums);
        if ($len<=2) {
            return array();
        }
        sort($nums);
        $result=array();
        for ($i=0;$i<$len-2;$i++) {
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }
            $left=$i+1;
            $right=$len-1;
            while ($left<$right) {
                $sum=$nums[$i]+$nums[$left]+$nums[$right];
                if ($sum==0) {
                    $result[]=array($nums[$i],$nums[$left],$nums[$right],);
                    $left++;
                    $right--;
                    while ($left < $right && $nums[$left]==$nums[$left-1]) {
                        $left++;
                    }
                    while ($left < $right && $nums[$right]==$nums[$right+1]) {
                        $right--;
                    }
                } elseif ($sum>0) {
                    $right--;
                } else {
                    $left++;
                }
            }
        }
        unset($nums);
        return $result;
    }
}
