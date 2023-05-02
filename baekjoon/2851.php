<?php
$score = 0;
for ($i = 0; $i < 10; $i++) {
    fscanf(STDIN, "%d", $mushroom);
    $score += $mushroom;
    if ($score >= 100) {
        if (abs(100 - $score) <= abs(100 - ($score-$mushroom))) {
            break;
        } else {
            $score -= $mushroom;
            break;
        }
    }
}
echo $score;