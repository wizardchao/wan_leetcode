<?php
require_once('Solution.php');
use Solution\Solution;

$nums=[1,2,3];
$nums=[3,2,1];
$solution=new Solution();
$re=$solution->nextPermutation($nums);
print_r($nums);
