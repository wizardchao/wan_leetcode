<?php

require_once('Solution.php');
use Solution\Solution;

$nums=[-2,1,-3,4,-1,2,1,-5,4];
$solution=new Solution();
$re=$solution->maxSubArray($nums);
print_r($re);
