<?php
/**
 * Bubble Sort is one easist sort method
 * given an unsorted list 5,3,8,6,4
 * diff each form beginning and change position
 * of the bigger one, do it untill everything
 * sorted
 */
 
 $list = [5,3,8,6,4];
 echo "before: \n";
 print_r($list);
 function bubbleSort($list){
 
 for ($j=0; $j<count($list)-1; $j++){
   for ($i=0; $i<count($list)-1; $i++) {
     if ($list[$i+1] < $list[$i]) {
       $tmp = $list[$i+1];
       $list[$i+1] = $list[$i];
       $list[$i] = $tmp;
       unset($tmp);
     }
   }
 }
 return $list;
 }
 
 echo "\n after: \n";
 print_r($list);
