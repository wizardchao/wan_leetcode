<?php
require_once('Solution.php');
use Solution\Solution;

$nums=[-1, 0, 1, 2, -1, -4];
$solution=new Solution();
$re=$solution->threeSum($nums);
print_r($re);
 ?>
