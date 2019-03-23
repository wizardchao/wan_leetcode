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
        $nums=array_unique($nums);
        $count=count($nums);
        sort($nums);
         $list=array_map(function($el){
           if($el>0) return $el;
         },$nums);
           $count=count($list);
         if($count==0 || $list[0]>1) return 1;
         for($i=0,$list[$count]=$list[$count-1]+1;$i<$count;$i++){
           if($list[$i+1]-$list[$i]>1){
             return $list[$i]+1;
           }
         }

         return $list[$count];
    }
}
