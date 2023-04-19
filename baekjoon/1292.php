<?php
fscanf(STDIN, "%d %d", $a, $b);
$arr = [0];
$val = 1;
while(count($arr) <= 1000) {
    for ($i = 0; $i < $val; $i++) {
        if (count($arr) <= 1000) {
            array_push($arr, $val);
        } else {
            break;
        }
    }
    $val++;
}
echo array_sum(array_slice($arr, $a, $b-$a+1));