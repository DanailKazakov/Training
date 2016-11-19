<?php

fscanf(STDIN, "%d", $age);
fscanf(STDIN, "%f", $price);
fscanf(STDIN, "%d", $toyPrice);

$toyProfits = 0;
$moneySaved = 0;

for ($i = 1; $i<=$age; $i = $i + 2){
    $toyProfits = $toyProfits + $toyPrice;
}

for ($i = 2; $i<=$age; $i = $i + 2){
    $moneySaved = $moneySaved + ((10 * ($i/2)) - 1);
}

$totalProfits = $toyProfits + $moneySaved;

if ($price > $totalProfits){
    printf("No! %.2f", $price - $totalProfits);
}
else {
    printf("Yes! %.2f", $totalProfits - $price);
}