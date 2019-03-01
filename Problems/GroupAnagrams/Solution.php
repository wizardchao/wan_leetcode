<?php
namespace Solution;

class Solution
{

    /**
     * @param String[] $strs
     * @return String[][]
     */
    public function groupAnagrams($strs)
    {
        $strSort=function ($s) {
            $arr = str_split($s);
            asort($arr);
            return implode('', $arr);
        };

        $arr=$strs;
        $list=array();
        $groupArr=array();
        foreach ($arr as $el) {
            $val=$strSort($el);
            if (!in_array($val, $list)) {
                $list[]=$val;
            }
            $groupArr[$val][]=$el;
        }

        return array_values($groupArr);
    }
}
