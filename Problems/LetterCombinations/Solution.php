<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function letterCombinations($digits)
    {
        if (empty($digits)) {
            return [];
        }
        $list=array(
            2 => ['a','b','c'],
            3 => ['d','e','f'],
            4 => ['g','h','i'],
            5 => ['j','k','l'],
            6 => ['m','n','o'],
            7 => ['p','q','r','s'],
            8 => ['t','u','v'],
            9 => ['w','x','y','z'],
          );


          $res=function($arr,$arr2){
            $list=[];
            foreach($arr as $key => $el){
                foreach($arr2 as $val){
                  $list[]=$el.$val;
                }
            }
            return $list;
          };

          $len=strlen($digits);
          $re=$list[$digits[0]];
          if($len==1) return $re;
          for($i=1;$i<$len;++$i){
            $re=$res($re, $list[$digits[$i]]);
          }
          return $re;
    }
}
