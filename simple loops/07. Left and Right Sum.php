<?php

fscanf(STDIN, "%d", $n);

$sumA = 0;
$sumB = 0;

function cycle($n, $sum){
    for ($i = 1; $i <= $n; $i++){
        fscanf(STDIN, "%d", $temp);
        $sum = $sum + $temp;
    }
    return $sum;
}

$sumA = cycle($n, $sumA);
$sumB = cycle($n, $sumB);

if ($sumA == $sumB){
    printf("Yes, sum = ");
    printf("%d", $sumA);
}
else {
    printf("No, diff = ");
    printf("%d", abs($sumA - $sumB));
}