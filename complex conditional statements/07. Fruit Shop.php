<?php

fscanf(STDIN, "%s", $fruit);
fscanf(STDIN, "%s", $day);
fscanf(STDIN, "%f", $quantity);

$prices = array(
    array(2.50, 1.20, 0.85, 1.45, 2.70, 5.50, 3.85),
    array(2.70, 1.25, 0.90, 1.60, 3.00, 5.60, 4.20),
);

switch($day){
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        if ($fruit == "banana"){
            $cost = $quantity * $prices[0][0];
        }
        elseif ($fruit == "apple"){
            $cost = $quantity * $prices[0][1];
        }
        elseif ($fruit == "orange"){
            $cost = $quantity * $prices[0][2];
        }
        elseif ($fruit == "grapefruit"){
            $cost = $quantity * $prices[0][3];
        }
        elseif ($fruit == "kiwi"){
            $cost = $quantity * $prices[0][4];
        }
        elseif ($fruit == "pineapple"){
            $cost = $quantity * $prices[0][5];
        }
        elseif ($fruit == "grapes"){
            $cost = $quantity * $prices[0][6];
        }
        else {
            $cost = "error";
        }
        break;
    case "Saturday":
    case "Sunday":
        if ($fruit == "banana"){
            $cost = $quantity * $prices[1][0];
        }
        elseif ($fruit == "apple"){
            $cost = $quantity * $prices[1][1];
        }
        elseif ($fruit == "orange"){
            $cost = $quantity * $prices[1][2];
        }
        elseif ($fruit == "grapefruit"){
            $cost = $quantity * $prices[1][3];
        }
        elseif ($fruit == "kiwi"){
            $cost = $quantity * $prices[1][4];
        }
        elseif ($fruit == "pineapple"){
            $cost = $quantity * $prices[1][5];
        }
        elseif ($fruit == "grapes"){
            $cost = $quantity * $prices[1][6];
        }
        else {
            $cost = "error";
        }
        break;
    default:
        $cost = "error";
}

printf("%s", $cost);