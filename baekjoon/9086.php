<?php
fscanf(STDIN, '%d', $cnt);
ob_start();
for( $i = 0; $i < $cnt; $i++) {
    fscanf(STDIN,"%s",$str);
    $arr = str_split($str);
    echo $arr[0].end($arr)."\n";
}
ob_flush();