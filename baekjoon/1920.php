<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%s", $a);
$testArray = explode(' ', $a);
sort($testArray);
fscanf(STDIN, "%d", $m);
fscanf(STDIN, "%s", $numbers);
$numberArray = explode(' ', $numbers);


for ($i = 0; $i < $m; $i++) {
    $isset = false;
    $start = 0;
    $end = $n - 1;

    while ($start <= $end) {
        $mid = floor(($start + $end) / 2);
        if ($testArray[$mid] == $numberArray[$i]) {
            $isset = true;
            break;
        } else if ($testArray[$mid] < $numberArray[$i]) {
            $start = $mid + 1;
        } else {
            $end = $mid - 1;
        }
    }

    if (!$isset) {
        echo "0";
    } else {
        echo "1";
    }
    echo "\n";
}