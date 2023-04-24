<?php
// try 1
fscanf(STDIN, "%d", $cnt); // 테스트케이스개수
for ($i = 0; $i < $cnt; $i++) {
    fscanf(STDIN, "%s", $str); // 테스트케이스 문자열로 받기
    $arr = explode(' ', $str); // 공백을 기준으로 잘라서 배열화
    foreach ($arr as $word) {
        echo strrev($word) . ' '; // 단어를 뒤집고 뒤에 공백 추가
    }
    echo "\n"; // 줄바꿈
}

// try 2
fscanf(STDIN, "%d", $cnt);
for ($i = 0; $i < $cnt; $i++) {
    $string = '';
    fscanf(STDIN, "%s", $str);
    $arr = explode(' ', $str);
    foreach ($arr as $word) {
        $string .= implode("", array_reverse(str_split($word))) . ' '; // 문자열을 하나씩 쪼개서 array_reverse 후 합치기
    }
    echo $string . "\n";
}

// try 3
fscanf(STDIN, "%d", $cnt);
for ($i = 0; $i < $cnt; $i++) {
    fscanf(STDIN, "%s", $str);
    $arr = explode(' ', $str);
    foreach ($arr as $key => $word) {
        echo strrev($word); // 문자열 뒤집기
        if ($key !== array_key_last($arr)) { // 마지막 단어가 아니면 뒤에 공백 추가
            echo ' ';
        }
    }
    echo "\n";
}