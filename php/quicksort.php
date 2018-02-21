<?php

/**
 * quick sort use divide and conquer algorithm
 * 1. make a number as a base number x
 * 2. numbers less than x goes to arrayA and numbers more than x goes to arrayB
 * 3. repeat steps 1 and 2 until you only find 2 numbers in there
 */

/**
 * @param array $list
 * @param int $leftIndex
 * @param int $rightIndex
 *
 * @return mixed
 * @throws Exception
 */
function quickSortBase(array &$list, $leftIndex, $rightIndex)
{
    //use the middle number as base number X

    if ($leftIndex >= $rightIndex) {
        return $list;
    }
    $x = $list[$leftIndex];

    $leftPointer = $leftIndex;
    $rightPointer = $rightIndex;
    while ($leftPointer < $rightPointer) {
        while ($list[$rightPointer] >= $x && $leftPointer < $rightPointer) {
            $rightPointer--;
        }
        // the base number self is passed
        while ($list[$leftPointer] <= $x && $leftPointer < $rightPointer) {
            $leftPointer++;
        }
        list($list[$rightPointer], $list[$leftPointer]) = [$list[$leftPointer], $list[$rightPointer]];
    }
    list($list[$leftIndex], $list[$leftPointer]) = [$list[$leftPointer], $list[$leftIndex]];

    quickSortBase($list, $leftIndex, $leftPointer - 1);
    quickSortBase($list, $rightPointer + 1, $rightIndex);

    return $list;
}

/**
 *
 * @param array $list
 */
function quickSort1(array $list)
{
    $len = count($list);

    return quickSortBase($list, 0, $len - 1);
}


$list = [5, 3, 8, 6, 4];
echo "before: \n";
print_r($list);
echo "\n after: \n";
print_r(quickSort1($list));
