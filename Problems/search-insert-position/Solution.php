<?php

namespace Solution;

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsert($nums, $target)
    {
        if (in_array($target, $nums)) {
            return array_search($target, $nums);
        }

        if ($nums[0]>$target) {
            return 0;
        }elseif($nums[count($nums)-1]< $target){
          return count($nums);
        }

        $count=count($nums);
        for($i=0;$i<$count-1;++$i){
          if($nums[$i]<$target && $nums[$i+1]>$target){
            return $i+1;
          }
        }
    }
}
