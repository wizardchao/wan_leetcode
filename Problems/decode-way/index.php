<?php
require_once('Solution.php');
use Solution\Solution;

$s=101;
$solution=new Solution();
$re=$solution->numDecodings($s);
print_r($re);
