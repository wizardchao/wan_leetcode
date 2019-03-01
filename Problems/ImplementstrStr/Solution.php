<?php
namespace Solution;

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    public function strStr($haystack, $needle)
    {
        $len1=strlen($haystack);
        $len2=strlen($needle);
        $re=-1;
        if ($len1==$len2) {
          if($haystack==$needle){
            return 0;
          }
        } elseif ($len2>$len1) {
            return $re;
        }

        for ($i=0;$i<=$len1-$len2;++$i) {
            $str=substr($haystack, $i, $len2);
            if (strcmp($str, $needle)==0) {
                return $i;
            }
        }

        return $re;
    }
}
