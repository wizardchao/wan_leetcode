<?php
namespace Solution;

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function nextPermutation(&$nums) {
       $n = count($nums);
       $i = $n - 2;
       $j = $n - 1;
       $reverseSort=function($arr,$k){
         $a1=array_splice($arr,0,$k);
         $a2=array_reverse($arr);
         return array_merge($a1,$a2);
       };
       while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) --$i;
       if ($i >= 0) {
           while ($nums[$j] <= $nums[$i]) --$j;
           list($nums[$i],$nums[$j])=array($nums[$j], $nums[$i]);
       }
        $nums=$reverseSort($nums,$i+1);
    }
}
