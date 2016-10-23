<?php

fscanf(STDIN, "%d", $num);

$sum = 0;
$diff = 0;
$tempdiff = 0;
$temp1 = 0;
$temp2 = 0;

for ($i = 1; $i <= 2 * $num; $i++){
    if ($i == 1){
        fscanf(STDIN, "%d", $temp);
        $temp1 = $temp;
    }
    elseif ($i == 2){
        fscanf(STDIN, "%d", $temp);
        $temp2 = $temp;
        $sum = $temp1 + $temp2;
    }
    elseif (($i % 2) != 0){
        fscanf(STDIN, "%d", $temp);
        $temp1 = $temp;
    }
    else {
        fscanf(STDIN, "%d", $temp);
        $temp2 = $temp;
        $tempdiff = abs($temp1 + $temp2 - $sum);
        if ($tempdiff > $diff){
            $diff = $tempdiff;
        }
        $sum = $temp1 + $temp2;
    }
}

if ($diff == 0){
    printf("Yes, value=%d", $temp1 + $temp2);
}
else {
    printf("No, maxdiff=%d", $diff);
}