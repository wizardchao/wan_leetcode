<?php

namespace Solution;

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    public function longestPalindrome($s)
    {
        $len=strlen($s);
        if ($len<=1) {
            return $s;
        }
        if ($len==2) {
            return $s[0]==$s[1]?$s:$s[0];
        }

        for ($i=0;$i<$len-2;++$i) {
            if ($s[$i]==$s[$i+1]) {
                $max=1;
                $s1=$s[$i].$s[$i+1];
                break;
            } else {
                $max=0;
                $s1='';
            }
        }

        for ($i=1;$i<$len;++$i) {
            $cal=$k=$s[$i]==$s[$i+1]?1:0;
            echo 'cal='.$cal,',k=',$k,PHP_EOL;
            for ($j=1;$j<=$i && $j<= $len-1-$i-$cal;++$j) {
                if ($s[$i-$j]==$s[$i+$j+$cal]) {
                    if (++$k>$max) {
                        $max=$k;
                        $s1=substr($s, $i-$j, 2*$j+1+$cal);
                        echo 'j=',$j,',s1=',$s1,PHP_EOL;
                    }
                } else {
                    break;
                }
            }
        }
        exit;
        // return $max?$s1:$s[0];
    }
}
