<?php

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);

function euclid ($a, $b){
    if ($b == 0){
        return $a;
    }
    else {
        return euclid($b, $a%$b);
    }
}

printf("%d", euclid($a, $b));