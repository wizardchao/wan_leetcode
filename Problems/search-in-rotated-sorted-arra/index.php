<?php
require_once('Solution.php');
use Solution\Solution;

$nums=[1,2,3];
$target=0;
$solution=new Solution();
$re=$solution->search($nums, $target);
print_r($nums);
