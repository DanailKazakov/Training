<?php

fscanf(STDIN, "%d", $n);

$sum = 1;

for ($i = 1; $i <= $n; $i++){
    $sum = $sum * $i;
}

printf("%d", $sum);