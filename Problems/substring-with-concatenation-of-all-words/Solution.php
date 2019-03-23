<?php
namespace Solution;

class Solution
{

    /**
     * @param String $s
     * @param String[] $words
     * @return Integer[]
     */
    public function findSubstring($s, $words)
    {
        $ck_value_arr=array_count_values($words);
        // echo 'ck_value_arr=',print_r($ck_value_arr);echo PHP_EOL;
        $m=count($words);
        $n=strlen($words[0]);
        $num=$m*$n;
        $len=strlen($s);
        $re=[];
        for ($i=0;$i<=$len-$num;++$i) {
            $str=substr($s, $i, $num);
            $arr=str_split($str, $n);
            $el=array_count_values($arr);
            if ($el==$ck_value_arr) {
                $re[]=$i;
            }
        }

        return $re;
    }
}
