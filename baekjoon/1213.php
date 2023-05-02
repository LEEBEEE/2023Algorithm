<?php
fscanf(STDIN, "%s", $str);
$strArr = str_split($str);
sort($strArr); // 알파벳순 정렬
$countArr = array_count_values($strArr); // [배열에 존재하는 모든 값] => 중복된 개수의 배열
$answer = '';
$center = '';
$sorry = false;
foreach($countArr as $key => $val) {
    if ($val % 2 == 1) {
        if (!$sorry) { // 홀수인 알파벳 하나만 허용
            $sorry = true;
            $center = $key;
        } else {
            echo "I'm Sorry Hansoo";
            exit;
        }
    }

    for ($i = 0; $i < floor($val / 2); $i++) {
        $answer .= $key;
    }
}
echo $answer . $center . strrev($answer);