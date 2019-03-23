<?php
require_once('Solution.php');
use Solution\Solution;

$nums=[5,7,7,8,8,10,];
// $nums=[1,1,2];
// $nums=[2,2];
$target=8;
$solution=new Solution();
$re=$solution->searchRange($nums, $target) ;
print_r($re);
