<?php

require_once('Solution.php');
use Solution\Solution;

$s="dabababad";
$s="baacc";
$s="cbbdbb";
$s="ccc";
$solution=new Solution();
$re=$solution->longestPalindrome($s);
print_r($re);
