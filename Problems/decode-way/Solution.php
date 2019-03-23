<?php
namespace Solution;

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function numDecodings($s)
    {
        $s=(string)trim($s);
        if (empty($s)) {
            return 0;
        }
        $changeLettle=function ($num) {
            if ($num[0]==0 || $num<1 || $num> 26) {
                return 0;
            }
            return 1;
        };

        $len=strlen($s);
        if ($changeLettle($s[0])) {
            $re[0]=1;
        } else {
            return 0;
        }

        if ($len==1) {
            return $re[0];
        }
        if ($changeLettle($s[1])) {
            $re[1]=$changeLettle($s[0].$s[1])?1+$re[0]:$re[0];
        } else {
            $re[1]=$re[0];
        }

        $pos=strpos($s, '0');
        if ($pos  && $s[$pos-1]>2) {
            return 0;
        }

        for ($i=2;$i<$len;++$i) {
            if ($changeLettle($s[$i])) {  //$s[$i]>0
                $re[$i]=$re[$i-1];
                $re[$i]+=$changeLettle($s[$i-1].$s[$i])?$re[$i-2]:0;
            } else {   //$s[$i]=0
                if (!$changeLettle($s[$i-1].$s[$i])) {
                    return 0;
                }
                $re[$i]=$re[$i-2];
            }
        }
        print_r($re);
        exit;
        return end($re);
    }
}
