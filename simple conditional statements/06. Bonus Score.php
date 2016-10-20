<?php

fscanf(STDIN, "%d", $n);

$num = $n;

if ($num <= 100){
    $lessThanHundred = 5;
    $num = $num + $lessThanHundred;
}
elseif ($num > 100 && $num <= 1000){
    $moreThanHundred = 0.2 * $n;
    $num = $num + $moreThanHundred;
}
elseif ($num > 1000){
    $moreThanThousand = 0.1 * $num;
    $num = $num + $moreThanThousand;
}

if ($n % 2 == 0){
    $evenNumber = 1;
    $num = $num + $evenNumber;
}

if ($n % 5 == 0 && $n % 10 != 0){
    $finishFive = 2;
    $num = $num + $finishFive;
}

$result = $num - $n;
fprintf(STDOUT, "%f\n", $result);
fprintf(STDOUT, "%f", $num);