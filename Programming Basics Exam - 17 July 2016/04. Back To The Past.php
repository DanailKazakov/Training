<?php

fscanf(STDIN, "%f", $sum);
fscanf(STDIN, "%d", $year);

$inheritance = $sum;

$moneyNeeded = 0;
for ($i = 0; $i <= $year - 1800; $i++){
    if ($i % 2 == 0){
        $inheritance = $inheritance - 12000;
        $moneyNeeded = $moneyNeeded + 12000;
    }
    else {
        $inheritance = $inheritance - (12000 + (50 * (18 + $i)));
        $moneyNeeded = $moneyNeeded + (12000 + (50 * (18 + $i)));
    }
}

if ($inheritance < 0 ){
    $cashNeeded = $moneyNeeded - $sum;
    printf("He will need %.2f dollars to survive.", $cashNeeded);
}
else {
    printf("Yes! He will live a carefree life and will have %.2f dollars left.", $inheritance);
}