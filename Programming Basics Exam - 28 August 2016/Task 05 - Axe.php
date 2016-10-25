<?php

fscanf(STDIN, "%d", $n);

$dash = "-";
$star = "*";

// first n lines
for ($i = 0; $i < $n; $i++) {
    $temp = str_repeat($dash, 3 * $n) . "*" . str_repeat($dash, $i) . "*" . str_repeat($dash, 2 * $n - 2 - $i);
    printf("%s\n", $temp);
}
// axe handle
if ($n % 2 == 0){
    for ($i = 0; $i < $n/2; $i++){
        $temp = str_repeat($star, 3 * $n + 1) . str_repeat($dash, $n - 1) . "*" . str_repeat($dash, $n - 1);
        printf("%s\n", $temp);
    }
}
else {
    for ($i = 0; $i < ($n - 1)/2; $i++){
        $temp = str_repeat($star, 3 * $n + 1) . str_repeat($dash, $n - 1) . "*" . str_repeat($dash, $n - 1);
        printf("%s\n", $temp);
    }
}
// axe metal head
if ($n % 2 == 0){
    for ($i = 0; $i < $n/2; $i++){
        if ($i < $n/2 - 1){
            $temp = str_repeat($dash, 3 * $n - $i) . "*" . str_repeat($dash, $n - 1 + $i * 2) . "*" . str_repeat($dash, $n - 1 - $i);
            printf("%s\n", $temp);
        }
        else {
            $temp = str_repeat($dash, 3 * $n - $i) . "*" . str_repeat($star, $n - 1 + $i * 2) . "*" . str_repeat($dash, $n - 1 - $i);
            printf("%s", $temp);
        }
    }
}
else {
    for ($i = 0; $i < ($n - 1)/2; $i++){
        if ($i < ($n - 1)/2 - 1){
            $temp = str_repeat($dash, 3 * $n - $i) . "*" . str_repeat($dash, $n - 1 + $i * 2) . "*" . str_repeat($dash, $n - 1 - $i);
            printf("%s\n", $temp);
        }
        else {
            $temp = str_repeat($dash, 3 * $n - $i) . "*" . str_repeat($star, $n - 1 + $i * 2) . "*" . str_repeat($dash, $n - 1 - $i);
            printf("%s", $temp);
        }
    }
}
