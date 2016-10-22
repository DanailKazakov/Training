<?php

fscanf(STDIN, "%s", $type);
fscanf(STDIN, "%f", $r);
fscanf(STDIN, "%f", $c);

$roomSize = $r * $c;

switch($type){
    case "Premiere":
        printf("%.2f", $roomSize * 12);
        break;
    case "Normal":
        printf("%.2f", $roomSize * 7.50);
        break;
    case "Discount":
        printf("%.2f", $roomSize * 5);
        break;
    default:
        printf("error");
}