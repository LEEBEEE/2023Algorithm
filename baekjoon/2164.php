<?php
    // 시간 초과
    fscanf(STDIN, "%d", $n);
    $card = [];
    for($i = 1; $i <= $n; $i++) {
        array_push($card, $i);
    }
    while (count($card) > 1) {
        array_shift($card);
        $last = array_shift($card);
        array_push($card, $last);
    }
    echo $card[0];
    
    // 정답처리
    fscanf(STDIN, "%d", $n);
    $arr = [1];
    $pow = 1;
    while (count($arr) < $n) {
        for ($i = 1; $i <= $pow; $i++) {
            if (count($arr) != $n) {
                array_push($arr, $i * 2);
            } else {
                break 2;
            }
        }
        $pow *= 2;
    }
    echo $arr[$n-1];
