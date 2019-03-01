<?php

namespace Solution;

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $len=count($matrix);
        $list=array();
        for($i=0;$i<$len;++$i){
          $list[]=array_reverse(array_column($matrix,$i));
        }
        $matrix=$list;
        unset($list);
    }
}
