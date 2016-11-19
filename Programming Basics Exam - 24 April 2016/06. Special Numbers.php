<?php

fscanf(STDIN, "%d", $number);

for ($i = 1111; $i<=9999; $i++){
    $ones = $i % 10;
    $temp = floor($i / 10);
    $tens = $temp % 10;
    $temp = floor($temp / 10);
    $hundreds = $temp % 10;
    $temp = floor($temp / 10);
    $thousands = $temp % 10;

    if ($ones == 0 || $tens == 0 || $hundreds == 0 || $thousands == 0){

    }
    else {
        if ($number % $ones == 0 && $number % $tens == 0 && $number % $hundreds == 0 && $number % $thousands == 0) {
            printf("%d ", $i);
        }
    }
}