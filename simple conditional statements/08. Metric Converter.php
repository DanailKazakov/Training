<?php

fscanf(STDIN, "%f", $n);
fscanf(STDIN, "%s", $m);
fscanf(STDIN, "%s", $t);



switch ($m){
    case "m":
        break;
    case "mm":
        $n = $n / 1000;
        break;
    case "cm":
        $n = $n / 100;
        break;
    case "mi":
        $n = $n / 0.000621371192;
        break;
    case "in":
        $n = $n / 39.3700787;
        break;
    case "km":
        $n = $n / 0.001;
        break;
    case "ft":
        $n = $n / 3.2808399;
        break;
    case "yd":
        $n = $n / 1.0936133;
        break;
}

switch ($t){
    case "m":
        fprintf(STDOUT, "%f", $n);
        break;
    case "mm":
        $n = $n * 1000;
        fprintf(STDOUT, "%f", $n);
        break;
    case "cm":
        $n = $n * 100;
        fprintf(STDOUT, "%f", $n);
        break;
    case "mi":
        $n = $n * 0.000621371192;
        fprintf(STDOUT, "%f", $n);
        break;
    case "in":
        $n = $n * 39.3700787;
        fprintf(STDOUT, "%f", $n);
        break;
    case "km":
        $n = $n * 0.001;
        fprintf(STDOUT, "%f", $n);
        break;
    case "ft":
        $n = $n * 3.2808399;
        fprintf(STDOUT, "%f", $n);
        break;
    case "yd":
        $n = $n * 1.0936133;
        fprintf(STDOUT, "%f", $n);
        break;
}