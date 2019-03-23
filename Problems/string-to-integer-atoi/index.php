<?php
require_once('Solution.php');
use Solution\Solution;

$str='+3';
$solution=new Solution();
$re=$solution->myAtoi($str);
print_r($re);
