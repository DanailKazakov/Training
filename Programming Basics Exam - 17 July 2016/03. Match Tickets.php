<?php

fscanf(STDIN, "%f", $budget);
fscanf(STDIN, "%s", $type);
fscanf(STDIN, "%d", $people);

if ($people > 0 && $people < 5){
    $budget = 0.25 * $budget;
}
elseif ($people > 4 && $people < 10){
    $budget = 0.4 * $budget;
}
elseif ($people > 9 && $people < 25){
    $budget = 0.5 * $budget;
}
elseif ($people > 24 && $people < 50){
    $budget = 0.6 * $budget;
}
else {
    $budget = 0.75 * $budget;
}

switch ($type){
    case "VIP":
        $moneyLeft = abs($people * 499.99 - $budget);
        if ($people * 499.99 <= $budget){
            printf("Yes! You have %.2f leva left.", $moneyLeft);
        }
        else {
            printf("Not enough money! You need %.2f leva.", $moneyLeft);
        }
        break;
    case "Normal":
        $moneyLeft = abs($people * 249.99 - $budget);
        if ($people * 249.99 <= $budget){
            printf("Yes! You have %.2f leva left.", $moneyLeft);
        }
        else {
            printf("Not enough money! You need %.2f leva.", $moneyLeft);
        }
        break;
}