<?php

fscanf(STDIN, "%d", $num);

function primeChecker ($num){
    if ($num < 2){
        return false;
    }
    if ($num == 2){
        return true;
    }
    if ($num % 2 == 0){
        return false;
    }
    $limit = ceil(sqrt($num));
    for ($i = 3; $i <= $limit; $i = $i + 2){
        if ($num % $i == 0){
            return false;
        }
    }
    return true;
}

if (primeChecker($num)){
    printf("Prime");
}
else {
    printf("Not Prime");
}