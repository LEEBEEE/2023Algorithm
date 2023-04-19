<?php
fscanf(STDIN, "%s", $str);
$arr = str_split($str);
rsort($arr);
foreach ($arr as $int) { echo $int; }