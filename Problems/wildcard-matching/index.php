<?php
require_once('Solution.php');
use Solution\Solution;


$s="ababbbbbbaabbbbabaaabbaaaabaaababbbaababbaaabbaaaabbabaabbabbbbbabbaabbbaabbbbababbaabaaaabbabaaaabababbaababbbbaababbabaababbabbbbbaaaaababaabaaabaabbabaaaaabbaaaaabaaababbbbbbabbabbbbbababbaabaaaabbbbaa";
$p="*ba*a*b*****a*ba*a*****aa***bba**a**aab**aa*a****a*a*bb*aabb*bbb*aa*aba*bbbb**aba***a*ba**bba*****a**abb";
// $s = "adceb";
// $p = "*a*b";
$solution=new Solution();
$re=$solution->isMatch($s,$p);
print_r($re);exit;
