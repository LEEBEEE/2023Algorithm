<?php
fscanf(STDIN, "%s", $room);
$numberArr = str_split($room);
$countArr = array_count_values($numberArr); // [배열에 존재하는 모든 값] => 중복된 개수의 배열
if (isset($countArr[9]) || isset($countArr[6])) {
    $countArr[6] = ceil(($countArr[9] + $countArr[6]) / 2);
    // 두 수를 합쳐서 2로 나눈 다음 올림 > 9와 6을 만들기 위해 필요한 세트의 개수
    unset($countArr[9]);
}
echo max($countArr);
