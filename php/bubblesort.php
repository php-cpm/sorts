<?php
/**
 * @file bubbleSort.php
 * Bubble Sort is one easiest sort method
 * given an unsorted list such as 5,3,8,6,4
 * diff each number from the beginning to the end and change
 * position of the bigger one, do it until everything sorted
 */

/**
 * original
 *
 * @var array $list
 * @return array
 */
function bubbleSort1(array $list)
{
    for ($j = 0; $j < count($list) - 1; $j++) {
        for ($i = 0; $i < count($list) - 1; $i++) {
            if ($list[$i + 1] < $list[$i]) {
                $tmp = $list[$i + 1];
                $list[$i + 1] = $list[$i];
                $list[$i] = $tmp;
                unset($tmp);
            }
        }
    }

    return $list;
}

/**
 * loop less
 *
 * after each loop, the biggest number is stable
 *
 * @var array $list
 * @return array
 */
function bubbleSort2(array $list)
{
    for ($j = 0; $j < count($list) - 1; $j++) {
        for ($i = 0; $i < count($list) - $j - 1; $i++) {
            if ($list[$i + 1] < $list[$i]) {
                $tmp = $list[$i + 1];
                $list[$i + 1] = $list[$i];
                $list[$i] = $tmp;
                unset($tmp);
            }
        }
    }

    return $list;
}

$list = [5, 3, 8, 6, 4];
echo "before: \n";
print_r($list);
echo "\n after: \n";
print_r(bubbleSort2($list));
