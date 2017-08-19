<?php
/**
 *
 */
class Math
{

  public function add(...$nums)
  {
    return array_sum($nums);
  }
}
$math = new Math;
var_dump($math->add(0,1,2,3,4,5,6,7));
