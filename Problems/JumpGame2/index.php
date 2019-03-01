<?php

require_once('Solution.php');
use Solution\Solution;

$nums=[2,3,1,1,4];
$solution=new Solution();
$re=$solution->jump($nums);
print_r($re);
