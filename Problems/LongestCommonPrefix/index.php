<?php

require_once('Solution.php');
use Solution\Solution;

$strs=["flower","flow","flight"];
// $strs=["dog","racecar","car"];
$strs=['aa','a'];
$solution=new Solution();
$re=$solution->longestCommonPrefix($strs);
print_r($re);
