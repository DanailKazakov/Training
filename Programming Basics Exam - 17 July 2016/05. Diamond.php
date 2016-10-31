<?php

fscanf(STDIN, "%d", $n);

$dot = ".";
$star = "*";

//upper diamond
for ($i = 1; $i <= $n; $i++){
    if ($i == 1){
        $temp = str_repeat($dot, $n - ($i - 1)) . "*" . str_repeat($star, (3 * $n) - 2 + (2 * ($i - 1))) . "*" . str_repeat($dot, $n - ($i - 1));
        printf("%s\n", $temp);
    }
    else {
        $temp = str_repeat($dot, $n - ($i - 1)) . "*" . str_repeat($dot, 3 * $n - 2 + (2 * ($i - 1))) . "*" . str_repeat($dot, $n - ($i - 1));
        printf("%s\n", $temp);
    }
}
//middle line
$temp = str_repeat($star, 5 * $n);
printf("%s\n", $temp);

//bottom part
for ($i = 1; $i <= 2 * $n + 1; $i++){
    if ($i < 2 * $n + 1){
        $temp = str_repeat($dot, $i) . "*" . str_repeat($dot, (5 * $n) - (2 * $i) - 2) . "*" . str_repeat($dot, $i);
        printf("%s\n", $temp);
    }
    else {
        $temp = str_repeat($dot, $i) . "*" . str_repeat($star, (5 * $n) - (2 * $i) - 2) . "*" . str_repeat($dot, $i);
        printf("%s", $temp);
    }
}