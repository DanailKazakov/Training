<?php

fscanf(STDIN, "%d", $num);
fscanf(STDIN, "%d", $first);

$biggest = $first;

if ($num > 1){
    for ($i = 2; $i <= $num; $i++){
        fscanf(STDIN, "%d", $temp);
        if ($temp > $biggest){
            $biggest = $temp;
        }
    }
}

printf("%d", $biggest);