<?php

fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $m);

if ($m < 45){
    $result = $n . ":" . ($m + 15);
}
elseif ($m >= 45 && $n < 23){
    if ($m < 55){
        $result = ($n + 1) . ":0" . (($m + 15) % 60);
    }
    else {
        $result = ($n + 1) . ":" . (($m + 15) % 60);
    }
}
elseif ($m >= 45 && $n == 23){
    if ($m < 55){
        $result = "0:0" . (($m + 15) % 60);
    }
    else {
        $result = "0:" . (($m + 15) % 60);
    }
}

fprintf(STDOUT, "%s", $result);