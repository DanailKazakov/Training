<?php

fscanf(STDIN, "%[^\n]", $string);

$sum = 0;

for ($i = 1; $i <= strlen($string); $i++){
    $temp = substr($string, $i, 1);
    switch ($temp){
        case "a":
            $sum = $sum + 1;
            break;
        case "e":
            $sum = $sum + 2;
            break;
        case "i":
            $sum = $sum + 3;
            break;
        case "o":
            $sum = $sum + 4;
            break;
        case "u":
            $sum = $sum + 5;
            break;
    }
}

printf("%d", $sum);