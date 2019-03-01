<?php
namespace Solution;

class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    public function convert($s, $numRows)
    {
        if ($numRows<=1) {
            return $s;
        }

        $len=strlen($s);
        if ($len==1) {
            return $s;
        }
        
        $str='';
        for ($i=0;$i<$numRows;$i++) {
            $j=$i;
            while ($j<$len) {
                $str.=$s[$j];
                $j+=2*($numRows-$i-1);
                if ($i && $i!=$numRows-1 && $j<=$len-1) {
                    $str.=$s[$j];
                }
                $j+=2*$i;
            }
        }
        return trim($str);
    }
}
