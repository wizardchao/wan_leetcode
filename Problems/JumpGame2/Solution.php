<?php

namespace Solution;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums) {
       $res=$last=$cur=0;
       $len=count($nums);
       for($i=0;$i<$len-1;++$i){
         $cur=max($cur,$i+$nums[$i]);
         if($i==$last){
           $last=$cur;
           ++$res;
           if($cur>=$len-1) break;
         }
       }
       return $res;
    }
}
