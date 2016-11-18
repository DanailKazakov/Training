<?php

fscanf(STDIN, "%d", $n);

$a = floor(($n - 1) / 2);

$b = (ceil($n / 2)) - 1;

//if equal to 1
if ($n == 1){
    $temp = "*";
    printf("%s", $temp);
}
//if equal to 2
elseif ($n == 2){
    $temp = "**";
    printf("%s", $temp);
}
//if equal to 3,5,7,9,etc.
elseif ($n % 2 == 1){
    for ($i = 0; $i <= $b; $i++){
        if ($i == 0){
            $temp = str_repeat("-", $a - $i) . "*" . str_repeat("-", $a - $i);
            printf("%s\n", $temp);
        }
        else {
            $temp = str_repeat("-", $a - $i) . "*" . str_repeat("-", (2 * $i) - 1) . "*" . str_repeat("-", $a - $i);
            printf("%s\n", $temp);
        }
    }
    for ($i = $b-1; $i >= 0; $i--){
        if ($i == 0){
            $temp = str_repeat("-", $a - $i) . "*" . str_repeat("-", $a - $i);
            printf("%s", $temp);
        }
        else {
            $temp = str_repeat("-", $a - $i) . "*". str_repeat("-", (2 * $i) - 1) . "*" . str_repeat("-", $a - $i);
            printf("%s\n", $temp);
        }
    }
}
//if equal to 4,6,8,10,etc.
else {
    for ($i = 0; $i <= $b; $i++){
        $temp = str_repeat("-", $a - $i) . "*" . str_repeat("-", 2 * $i) . "*" . str_repeat("-", $a - $i);
        printf("%s\n", $temp);
    }
    for ($i = $b-1; $i >= 0; $i--){
        $temp = str_repeat("-", $a - $i) . "*" . str_repeat("-", 2 * $i) . "*" . str_repeat("-", $a - $i);
        printf("%s\n", $temp);
    }
}