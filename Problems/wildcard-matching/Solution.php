<?php
namespace Solution;

class Solution
{

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    public function isMatch($s, $p)
    {
      $m = strlen($s);
      $n = strlen($p);

      $dp=array();
      $dp[0][0] = true;
      for ($i = 1; $i <= $n; ++$i) {
          if ($p[$i - 1] == '*') $dp[0][$i] = $dp[0][$i - 1];
      }
      for ($i = 1; $i <= $m; ++$i) {
          for ($j = 1; $j <= $n; ++$j) {
              if ($p[$j - 1] == '*') {
                  $dp[$i][$j] = $dp[$i - 1][$j] || $dp[$i][$j - 1];
              } else {
                  $dp[$i][$j] = ($s[$i - 1] == $p[$j - 1] || $p[$j - 1] == '?') && $dp[$i - 1][$j - 1];
              }
          }
      }
    // print_r(end($dp));exit;
      return $dp[$m][$n]?TRUE:FALSE;
    }
}
