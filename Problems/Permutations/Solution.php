<?php
namespace Solution;

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function permute($nums)
    {
        $len=count($nums);
        if ($len<=1) {
            return array($nums);
        }
        $x=$last=$len-1;
        sort($nums);
        $res=array($nums);
        while (true) {
            $y = $x--; //相邻的两个元素
      if ($nums[$x] < $nums[$y]) { //如果前一个元素的值小于后一个元素的值
          $z = $last;
          while ($nums[$x] > $nums[$z]) { //从尾部开始，找到第一个大于 $x 元素的值
              $z--;
          }
          /* 交换 $x 和 $z 元素的值 */
          list($nums[$x], $nums[$z]) = array($nums[$z], $nums[$x]);
          /* 将 $y 之后的元素全部逆向排列 */
          for ($i = $last; $i > $y; $i--, $y++) {
              list($nums[$i], $nums[$y]) = array($nums[$y], $nums[$i]);
          }
         $res[]=$nums;
          $x = $last;
          $count++;
      }
            if ($x == 0) { //全部组合完毕
                break;
            }
        }
        return $res;
    }
}
