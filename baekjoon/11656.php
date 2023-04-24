<?php
    fscanf(STDIN, "%s", $str);
    $arr = []; // 빈배열
    for ($i = 0; $i < strlen($str); $i++) {
        // 배열에 문자열 인덱스 $i부터 끝까지 잘라서 집어넣기
        array_push($arr, substr($str, $i));
    }
    sort($arr); // 정렬
    echo implode("\n", $arr); // 배열을 줄바꿈으로 합쳐서 프린트