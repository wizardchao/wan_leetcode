<?php

require_once('Solution.php');
use Solution\Solution;

$matrix=[
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
$matrix=[  [ 5, 1, 9,11],
  [ 2, 4, 8,10],
  [13, 3, 6, 7],
  [15,14,12,16]];
$solution=new Solution();
$re=$solution->rotate($matrix);
print_r($matrix);
