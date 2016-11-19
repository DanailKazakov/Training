<?php

fscanf(STDIN, "%d", $num);

function sum ($num){
    $sum = 0;
    while ($num >= 10){
        $sum = $sum + ($num % 10);
        $num = floor($num / 10);
    }
    $sum = $sum + $num;
    return $sum;
}

printf("%d", sum($num));