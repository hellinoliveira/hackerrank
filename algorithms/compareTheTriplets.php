<?php
/**
 * HackerRank solution
 * Compare the triplets
 * @author Hellison Oliveira <hellison.oliveira at gmail.com>
 * Date: 26/06/17
 * @see https://www.hackerrank.com/challenges/compare-the-triplets
 */


$handle = fopen("php://stdin", "r");
function solve($a0, $a1, $a2, $b0, $b1, $b2)
{

    $array = [0, 0];
    ($a0 > $b0) ? $array[0]++ : (($a0 < $b0) ? $array[1]++ : '');
    ($a1 > $b1) ? $array[0]++ : (($a1 < $b1) ? $array[1]++ : '');
    ($a2 > $b2) ? $array[0]++ : (($a2 < $b2) ? $array[1]++ : '');

    return $array;

}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
echo implode(" ", $result) . "\n";