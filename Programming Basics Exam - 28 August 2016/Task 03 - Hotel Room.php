<?php

$prices = array(
    array(50, 75.20, 76),
    array(65, 68.70, 77)
);

fscanf(STDIN, "%s", $month);
fscanf(STDIN, "%d", $days);

$resultS = 0;
$resultA = 0;

switch ($month){
    case "May":
    case "October":
        if ($days <= 7){
            $resultS = $days * $prices[0][0];
        }
        elseif ($days > 7 && $days <= 14){
            $resultS = 0.95 * ($days * $prices[0][0]);
        }
        else {
            $resultS = 0.7 * ($days * $prices[0][0]);
        }
        break;
    case "June":
    case "September":
        if ($days <= 14) {
            $resultS = $days * $prices[0][1];
        }
        else {
            $resultS = 0.8 * ($days * $prices[0][1]);
        }
        break;
    case "July":
    case "August":
        $resultS = $days * $prices[0][2];
        break;
}

switch ($month){
    case "May":
    case "October":
        if ($days <= 14) {
            $resultA = $days * $prices[1][0];
        }
        else {
            $resultA = 0.9 * ($days * $prices[1][0]);
        }
        break;
    case "June":
    case "September":
        if ($days <= 14) {
            $resultA = $days * $prices[1][1];
        }
        else {
            $resultA = 0.9 * ($days * $prices[1][1]);
        }
        break;
    case "July":
    case "August":
        if ($days <= 14) {
            $resultA = $days * $prices[1][2];
        }
        else {
            $resultA = 0.9 * ($days * $prices[1][2]);
        }
        break;
}

printf("Apartment: %.2f lv.\n", $resultA);
printf("Studio: %.2f lv.", $resultS);