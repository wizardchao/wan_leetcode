<?php

namespace Solution;

class Solution {
    function isMatch($s, $p) {
        if (empty($p)) return empty($s);
        if (strlen($p) > 1 && $p[1] == '*') {
            return self::isMatch($s, substr($p,2)) || (!empty($s) && ($s[0] == $p[0] || $p[0] == '.') && self::isMatch(substr($s,1),$p));
        } else {
            return !empty($s) && ($s[0] == $p[0] || $p[0] == '.') && self::isMatch(substr($s,1), substr($p,1));
        }
    }
}
