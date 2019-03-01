<?php

require_once('Solution.php');
use Solution\Solution;

$s=["eat","tea","tan","ate","nat","bat"];
// $s=["sat","lea","arm","sin","the","nod","guy","ins","rod"];
$s=["sat","lea","arm","sin","the","nod","ins","rod",'dor'];
$solution=new Solution();
$re=$solution->groupAnagrams($s);
print_r($re);
