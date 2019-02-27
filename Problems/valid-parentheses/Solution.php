<?php
namespace Solution;

class Solution
{

  /**
   * @param String $s
   * @return Boolean
   */
    public function isValid($s)
    {
        if (empty($s))  return true;
        $len=strlen($s);
        if ($len<=1)  return false;

        $match_arr=array(
      ')' => '(',
      '}' => '{',
      ']' => '[',
    );

        $list=array();
        for ($i=0;$i<$len;$i++) {
            if (in_array($s[$i], $match_arr)) {
                $list[]=$s[$i];
            } elseif (end($list)!=$match_arr[$s[$i]]) {
                return false;
            } else {
                array_pop($list);
            }
        }
        if (count($list)==0) {
            return true;
        }
        return false;
    }
}
