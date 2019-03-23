<?php
require_once('Solution.php');
use Solution\Solution;

$arr=[1, 0, -1, 0, -2, 2];
$solution=new Solution();
$re=$solution->fourSum($arr);
print_r($re);
