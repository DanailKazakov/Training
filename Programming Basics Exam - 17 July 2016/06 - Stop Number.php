<?php

fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $m);
fscanf(STDIN, "%d", $s);

for ($i = $m; $i >= $n; $i--){
    if ($i % 2 == 0 && $i % 3 == 0){
        if ($i == $s){
            break;
        }
        else {
            printf("%d ", $i);
        }
    }
}