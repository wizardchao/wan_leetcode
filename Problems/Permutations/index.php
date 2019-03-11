<?php
require_once('Solution.php');
use Solution\Solution;

$nums=[1,2,3,5];
$nums=[0,-1,1];
$solution=new Solution();
$re=$solution->permute($nums);
print_r($re);
