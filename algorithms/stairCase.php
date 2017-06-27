<?php
/**
 * HackerRank solution
 * StarCaise
 * @author Hellison Oliveira <hellison.oliveira at gmail.com>
 * Date: 26/06/17
 * @see https://www.hackerrank.com/challenges/staircase
 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        echo ($i < $n - $j) ? " " : "#";
    }
    echo "\n";
}