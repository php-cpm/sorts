<?php

/**
 * quick sort use divide and conquer algorithm
 * 1. make a number as a base number x
 * 2. numbers less than x goes to arrayA and numbers more than x goes to arrayB
 * 3. repeat steps 1 and 2 until you only find 2 numbers in there
 */
 
 /**
  * condition that $list length is 3
  */
 function quickSortBase($list, $leftIndex, $rightIndex)
 {
   if ($leftIndex > $rightIndex) {
     throw new Exception('left index must be smaller than right index');
   }
   $left = $list[$leftIndex];
   $right = $list[$rightIndex];
   if ($left > $right) {{
     $list[$leftIndex] = $right;
     $list[$rightIndex] = $left;
   }
   
   return $list;
 }
 function quickSort($list)
 {
   $len = count($list);
   $indexX = 
 }
