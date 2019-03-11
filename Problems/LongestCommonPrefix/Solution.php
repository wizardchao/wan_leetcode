<?php

namespace Solution;

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    public function longestCommonPrefix($strs)
    {
        if (empty($strs)) {
            return '';
        }
        $len0=strlen($strs[0]);
        $len=count($strs);
        for ($j=0;$j<$len0;++$j) {
            for ($i=0;$i<$len;++$i) {
                if ($j>=strlen($strs[$i]) || $strs[$i][$j]!=$strs[0][$j]) {
                    return substr($strs[$i], 0, $j);
                }
            }
        }
        return $strs[0];
    }
}
