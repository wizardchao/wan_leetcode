<?php

namespace Solution;

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
      if(empty($matrix)  || empty($matrix[0])){
        return array();
      }
      $m=count($matrix);
      $n=count($matrix[0]);
      $up=$left=0;
      $down=$m-1;
      $right=$n-1;
      $list=array();
      while(1){
        for($j=$left;$j<=$right;++$j) $list[]=$matrix[$up][$j];
        if(++$up > $down) break;
        for($i=$up;$i<=$down;++$i) $list[]=$matrix[$i][$right];
        if(--$right<$left) break;
        for($j=$right;$j>=$left;--$j) $list[]=$matrix[$down][$j];
        if(--$down<$up) break;
        for($i=$down;$i>=$up;--$i) $list[]=$matrix[$i][$left];
        if(++$left>$right) break;
      }
      return $list;
    }
}
