<?php

function isEven (){
    fscanf(STDIN, "%d", $num);
    if ($num == 0){
        printf("Invalid number\n");
        isEven();
    }
    elseif ($num % 2 == 0){
        printf("%d", $num);
    }
    else {
        printf("Invalid number\n");
        isEven();
    }
}

isEven();