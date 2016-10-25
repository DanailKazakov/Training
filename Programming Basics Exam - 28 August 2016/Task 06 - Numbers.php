<?php

fscanf(STDIN, "%d", $num);

$first = intval(substr($num, 0, 1));
$second = intval(substr($num, 1, 1));
$third = intval(substr($num, 2, 1));

$rows = $first + $second;
$columns = $first + $third;

for ($i = 1; $i <= $rows * $columns; $i++){
    if ($i % $columns != 0){
        if ($num % 5 == 0){
            $num = $num - $first;
            printf("%s ", $num);
        }
        elseif ($num % 3 == 0){
            $num = $num - $second;
            printf("%s ", $num);
        }
        else {
            $num = $num + $third;
            printf("%s ", $num);
        }
    }
    else {
        if ($num % 5 == 0){
            $num = $num - $first;
            printf("%s\n", $num);
        }
        elseif ($num % 3 == 0){
            $num = $num - $second;
            printf("%s\n", $num);
        }
        else {
            $num = $num + $third;
            printf("%s\n", $num);
        }
    }
}