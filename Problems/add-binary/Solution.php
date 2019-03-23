<?php
namespace Solution;

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $res = "";
        $carry = 0;//进位
        $i = strlen($a)-1;
        $j = strlen($b)-1;
        while($i>=0 || $j>=0 || $carry==1)
        {
            $sum = $carry;
            if($i>=0)
                $sum +=$a[$i--];
            if($j>=0)
                $sum += $b[$j--];
            $res = ($sum%2).$res;
            $carry = (int)($sum/2);
        }

      return $res;

    }
}
