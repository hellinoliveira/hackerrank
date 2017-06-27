<?php
/**
 * HackerRank solution
 * Plus Minus
 * @author Hellison Oliveira <hellison.oliveira at gmail.com>
 * Date: 26/06/17
 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);
$arr_temp = fgets($handle);
$arr = explode(" ", $arr_temp);
$arr = array_map('intval', $arr);

$positivo = 0;
$negativo = 0;
$zero = 0;

for ($i = 0; $i < $n; $i++) {
    ($arr[$i] > 0) ? $positivo++ : (($arr[$i] < 0) ? $negativo++ : $zero++);
}

echo $positivo / $n . "\n";
echo $negativo / $n . "\n";
echo $zero / $n;