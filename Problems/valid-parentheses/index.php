<?php
require_once('Solution.php');
use Solution\Solution;

$str="()[]{}";
$str="()[]{}";
// $str="(]";
$solution=new Solution();
$re=$solution->isValid($str);
print_r($re);exit;
 ?>
