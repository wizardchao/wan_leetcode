<?php

require_once('Solution.php');
use Solution\Solution;

$matrix=[
  [1, 2, 3, 4],
  [5, 6, 7, 8],
  [9,10,11,12]
];
$solution=new Solution();
$re=$solution->spiralOrder($matrix);
print_r($re);
