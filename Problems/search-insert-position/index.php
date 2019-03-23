<?php

require_once('Solution.php');
use Solution\Solution;

$nums=[1,3,5,6];
$target=2;
$solution=new Solution();
$re=$solution->searchInsert($nums, $target) ;
print_r($re);
