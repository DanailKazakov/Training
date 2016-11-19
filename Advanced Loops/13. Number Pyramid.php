<?php

fscanf(STDIN, "%d", $num);

$numbers = array();

for ($i = 1; $i <= $num; $i++){
    array_push($numbers, $i);
}

$counter = 0;

for ($i = 1; $i <= $num; $i++){
    for ($j = 1; $j <= $i; $j++){
        if ($counter == $num){
            break;
        }
        printf("%d ", $numbers[$counter]);
        $counter = $counter + 1;
    }
    printf("\n");
}