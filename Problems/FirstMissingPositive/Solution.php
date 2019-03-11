<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function firstMissingPositive($nums)
    {
        if (count($nums)==0) {
            return 1;
        }
        if (count($nums)==1) {
            return ($nums[0]< 0 || $nums[0]-1 >0) ?1:$nums[0]+1;
        }
        $nums[]=-1;
        $nums=array_unique($nums);
        $count=count($nums);
        sort($nums);
        print_r($nums);exit;
        for ($i=0;$i<$count-2;++$i) {
            if ($nums[$i]<=0) {
                if ($nums[$i+1] > 1) {
                    return 1;
                }
            } elseif ($nums[$i+1]-$nums[$i]>1) {
                return $nums[$i]+1;
            }
        }
        if ($nums[$count-1]>0) {
            return $nums[$count-1]+1;
        }
        return 1;
    }
}
