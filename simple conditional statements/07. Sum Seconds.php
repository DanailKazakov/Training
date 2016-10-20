<?php

fscanf(STDIN, "%s", $n);
fscanf(STDIN, "%s", $m);
fscanf(STDIN, "%s", $t);

$sum = $n + $m + $t;

$mins = intdiv($sum, 60);

$secs = $sum % 60;

if ($secs < 10){
    $result = $mins . ":0" . $secs;
    fprintf(STDOUT, "%s", $result);
}
else {
    $result = $mins . ":" . $secs;
    fprintf(STDOUT, "%s", $result);
}