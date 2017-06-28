<?php
/**
 * HackerRank solution
 * @author Hellison Oliveira <hellison.oliveira at gmail.com>
 * Date: 28/06/17
 * @see https://www.hackerrank.com/challenges/birthday-cake-candles
 */
$handle = fopen("php://stdin", "r");
function birthdayCakeCandles($n, $ar)
{
    $max = 0;
    $count = 0;
    for ($i = 0; $i < count($ar); $i++) {
        if ($ar[$i] > $max) {
            $max = $ar[$i];
            $count = 1;
        } else {
            if ($max == $ar[$i]) {
                $count++;
            }
        }
    }
    return $count;
}

fscanf($handle, "%i", $n);
$ar_temp = fgets($handle);
$ar = explode(" ", $ar_temp);
$ar = array_map('intval', $ar);
$result = birthdayCakeCandles($n, $ar);
echo $result . "\n";