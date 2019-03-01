<?php

require_once('Solution.php');
use Solution\Solution;

$s='PAYPALISHIRING';
$numRows=3;
$solution=new Solution();
$re=$solution->convert($s,$numRows);
print_r($re);
