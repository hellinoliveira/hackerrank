<?php
/**
 * HackerRank solution
 * Mim Max Sum
 * @author Hellison Oliveira <hellison.oliveira at gmail.com>
 * Date: 28/06/17
 */

$handle = fopen("php://stdin", "r");
$arr_temp = fgets($handle);
$arr = explode(" ", $arr_temp);
$arr = array_map('intval', $arr);

sort($arr);
$min = 0;
$max = 0;

//solution using phpfunctions
//$min = array_sum(array_slice($arr, 0, count($arr) -1));
//$max = array_sum(array_slice($arr, 1, count($arr)));

for ($i = 0; $i < 4; $i++) {
    $min += $arr[$i];
}
for ($i = count($arr) - 1; $i > count($arr) - 5; $i--) {
    $max += $arr[$i];
}
echo $min . " " . $max . "\n";
