<?php
namespace Solution;

class Solution
{

    /**
     * @param String $str
     * @return Integer
     */
    public function myAtoi($str)
    {
        $str=trim($str);

        $len=strlen($str);
        if (empty($str) || $len==0 || (!is_numeric($str[0]) && !in_array($str[0],['-','+']))) {
            return 0;
        }

        if($len==1 && !is_numeric($str[0])){
          return 0;
        }

        define('INT_MAX', 2147483647);
        define('INT_MIN', -2147483648);
        if ($str>INT_MAX) {
            return INT_MAX;
        }
        if ($str<INT_MIN) {
            return INT_MIN;
        }

        $flag='+';
        $i = 0;
        if ($str[0] == '-') {
            $flag = '-';
            ++$i;
        } elseif ($str[0] == '+') {
            ++$i;
        }

        $result=0;
        while ($len> $i ) {
          if(is_numeric($str[$i])){
            $result = $result * 10 + $str[$i];
          }elseif($str[$i]=='.'){
            break;
          }
        $i++;
     }
     return $flag == '-'?$flag.$result:$result;
    }
}
