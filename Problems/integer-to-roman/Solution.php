<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer $num
     * @return String
     */
    public function intToRoman($num)
    {
        $M= ["", "M", "MM", "MMM"];//千
        $C = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"];//百
        $X= ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"];//十
        $I = ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"];//个
        return trim($M[$num/1000].$C[($num%1000)/100].$X[($num%100)/10].$I[$num%10]);
    }
}
