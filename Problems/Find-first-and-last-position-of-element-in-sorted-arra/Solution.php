<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function searchRange($nums, $target)
    {
        $count=count($nums);
        if (!in_array($target, $nums) ||$count==0) {
            return [-1,-1];
        }

        $l=0;
        $r=$count-1;
        $list=[-1,-1];
        while ($l<=$r) {
            $mid=(int)(($l+$r)/2);
            if ($nums[$mid]<$target) {
                $l=$mid+1;
            } elseif ($nums[$mid]>$target) {
                $r=$mid-1;
            }else{
              $r=$l=$mid;
              while($l-1>=0 && $nums[$l-1]==$target) --$l;
              while($r+1<$count && $nums[$r+1]==$target) ++$r;
              break;
            }
        }

        if($nums[$r]==$target){
          $list=array(
            $l,$r
          );
        }
        return $list;
    }
}
