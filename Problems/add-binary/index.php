<?php
require_once('Solution.php');
use Solution\Solution;

$a='1111';
$b='1111';
$solution=new Solution();
$re=$solution->addBinary($a,$b);
print_r($re);
