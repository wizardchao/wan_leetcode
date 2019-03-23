<?php

namespace Solution;

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
       $s=trim($s);
       $len=strlen($s);
       if($len==0) return 0;
       $list=explode(' ',$s);
       return strlen(end($list));
    }
}
