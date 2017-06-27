<?php
/**
 * HackerRank solution
 * 2D Arrays
 * @author Hellison Oliveira <hellison.oliveira at gmail.com>
 * Date: 26/06/17
 * @see https://www.hackerrank.com/challenges/2d-array
 */
$handle = fopen("php://stdin", "r");
$arr = array();
for ($arr_i = 0; $arr_i < 6; $arr_i++) {
    $arr_temp = fgets($handle);
    $arr[] = explode(" ", $arr_temp);
    array_walk($arr[$arr_i], 'intval');
}

$max = -999;

for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        $sum = $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2];
        $sum += $arr[$i + 1][$j + 1];
        $sum += $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2];
        if ($sum > $max) {
            $max = $sum;
        }
    }
}

echo $max;