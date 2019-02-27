<?php
require_once('Solution.php');
use Solution\Solution;

$height=[1,8,6,2,5,4,8,3,7];
$solution=new Solution();
$re=$solution->maxArea($height);
print_r($re);
