<?php

require_once('Solution.php');
use Solution\Solution;

$haystack='hedhdghfgll';
$needle='ll';
$solution=new Solution();
$re=$solution->strStr($haystack, $needle);
print_r($re);
