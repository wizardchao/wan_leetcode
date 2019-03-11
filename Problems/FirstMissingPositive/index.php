<?php
require_once('Solution.php');
use Solution\Solution;

$nums=[1,8,6,2,5,4,8,3,7];
$nums=[7,8,9,11,12];
// $nums=[3,4,-1,1];
// $nums=[1,2,0];
// $nums=[7,8,9,11,12];
$nums=[2,2];
$solution=new Solution();
$re=$solution->firstMissingPositive($nums);
print_r($re);
