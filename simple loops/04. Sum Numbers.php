<?php

fscanf(STDIN, "%d", $num);

$sum = 0;

for ($i = 1; $i <= $num; $i++ ){
    fscanf(STDIN, "%d", $temp);
    $sum = $sum + $temp;
}

printf("%d", $sum);