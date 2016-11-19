<?php

fscanf(STDIN, "%d", $n);

for ($i = 0; $i <= $n; $i= $i+2){
    $temp = pow(2, $i);
    printf("%d\n", $temp);
}