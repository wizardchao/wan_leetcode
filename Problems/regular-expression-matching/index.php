<?php
require_once('Solution.php');
use Solution\Solution;

$solution=new Solution();
$re=$solution->isMatch($s, $p);
print_r($re);
