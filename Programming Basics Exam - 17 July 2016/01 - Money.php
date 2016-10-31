<?php

fscanf(STDIN, "%d", $bitcoin);
fscanf(STDIN, "%f", $yuan);
fscanf(STDIN, "%f", $commission);

if ($bitcoin == 0 && $yuan == 0){
    printf("0");
}
else {
    $leva = ($bitcoin * 1168) + (($yuan * 0.15) * 1.76);
    $euro = $leva / 1.95;
    $result = $euro - ($euro * $commission / 100);
    $temp = (string)$result;
    $decimals = explode(".", $temp);
    $decimals = strlen($decimals[1]);
    $decimals = $decimals + 1;
    $number = number_format($result, $decimals, ".", "");
    $number = rtrim($number, "0");
    printf("%s", $number);
}