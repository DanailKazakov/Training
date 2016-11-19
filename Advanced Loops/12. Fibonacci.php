<?php

fscanf(STDIN, "%d", $n);

$f0 = 1;

$f1 = 1;

$fn = 0;

if ($n == 0 || $n == 1){
    printf("1");
}
else {
    for ($i = 2; $i <= $n; $i++){
        $fn = $f0 + $f1;
        $f0 = $f1;
        $f1 = $fn;
    }
    printf("%d", $fn);
}

