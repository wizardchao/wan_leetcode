<?php

/**
 * substring-with-concatenation-of-all-words
 * @var [type]
 */

require_once('Solution.php');
use Solution\Solution;

$s = "barfoothefoobarman";
$words = ["foo","bar"];
$s = "wordgoodgoodgoodbestword";
$words = ["word","good","best","word"];
$s="wordgoodgoodgoodbestword";
$words=["word","good","best","good"];
$solution=new Solution();
$re=$solution->findSubstring($s, $words);
print_r($re);
