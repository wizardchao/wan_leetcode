<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
     function letterCombinations($digits) {
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
          $arr=str_split($digits);
          if(count($arr)==1){
            return array_map(function($el){
              return $el;
            },$list[$arr[0]]);
          }

         $re=[];
         foreach($arr as $key => $val){
           if($key==0){
             $re[]=array_map(function($el){
               return $el;
             },$list[$val]);
           }else{
             $arr=$list[$val];
             $re=array_map(function($el)use($arr){
                return array_map(function($elem)use($el){
                  $res_arr=[];
                  // return $el;
                  foreach($el as $res){
                    $res_arr[]=$res.$elem;
                  }
                  return $res_arr;
                },$arr);
             },$re);
           }
         }
         return $re;
     }
}
