<?php
require_once('Solution.php');
use Solution\Solution;

$num=58;
$solution=new Solution();
$re=$solution->intToRoman($num);
print_r($re);
