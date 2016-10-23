<?php

function transform($value){
    if (is_string($value)){
        return $value;
    }
    else {
        return floatval($value);
    }
}

fscanf(STDIN, "%d", $num);

$oddsum = 0;
$oddmin = "no";
$oddmax = "no";

$evensum = 0;
$evenmin = "no";
$evenmax = "no";

for ($i = 1; $i <= $num; $i++){
    if ($i == 1) {
        fscanf(STDIN, "%f", $temp);
        $oddsum = $temp;
        $oddmin = $temp;
        $oddmax = $temp;
    }
    elseif ($i == 2){
        fscanf(STDIN, "%f", $temp);
        $evensum = $temp;
        $evenmin = $temp;
        $evenmax = $temp;
    }
    elseif (($i % 2) != 0){
        fscanf(STDIN, "%f", $temp);
        $oddsum = $oddsum + $temp;
        if ($temp < $oddmin){
            $oddmin = $temp;
        }
        if ($temp > $oddmax){
            $oddmax = $temp;
        }
    }
    else {
        fscanf(STDIN, "%f", $temp);
        $evensum = $evensum + $temp;
        if ($temp < $evenmin){
            $evenmin = $temp;
        }
        if ($temp > $evenmax){
            $evenmax = $temp;
        }
    }
}

printf("OddSum=%s,\n", transform($oddsum));
printf("OddMin=%s,\n", transform($oddmin));
printf("OddMax=%s,\n", transform($oddmax));
printf("EvenSum=%s,\n", transform($evensum));
printf("EvenMin=%s,\n", transform($evenmin));
printf("EvenMax=%s", transform($evenmax));