<?php

require_once('Solution.php');
use Solution\Solution;

$s="b a ";
$solution=new Solution();
$re=$solution->lengthOfLastWord($s);
print_r($re);
