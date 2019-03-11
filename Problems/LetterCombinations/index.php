<?php
require_once('Solution.php');
use Solution\Solution;

$digits='234';
$solution=new Solution();
$re=$solution->letterCombinations($digits);
print_r($re);
