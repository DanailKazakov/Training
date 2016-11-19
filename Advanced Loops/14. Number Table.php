<?php

fscanf(STDIN, "%d", $n);

for ($i = 0; $i <= $n - 1; $i++){
    for ($j = 0; $j <= $n - 1; $j++){
        $num = $i + $j + 1;
        if ($num > $n){
            $print = 2 * $n - $num;
        }
        else {
            $print = $num;
        }
        printf("%d ", $print);
    }
    printf("\n");
}