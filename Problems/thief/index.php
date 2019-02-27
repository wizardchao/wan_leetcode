<?php
require_once('Solution.php');
use Solution\Solution;

$arr=[1,2,3,1];
$arr=[2,7,9,3,1];
$arr=[2,5,7,6,11,8,1,3,4];
$re=rob($arr);
function rob($arr)
{
    $length=COUNT($arr);
    if ($length==0) {
        return 0;
    }
    if ($length==1) {
        return $arr[0];
    }
    if ($length==2) {
        return max($arr[0], $arr[1]);
    }
    $list=array(
      rob(array($arr[0])),
      rob(array($arr[0],$arr[1])),
    );
    for ($i=2,$sum=0;$i<$length;$i++) {
        $list[$i]=max($list[$i-2]+$arr[$i], $list[$i-1]);
    }
    // return end($list);
    return $list;
}

print_r($re);
