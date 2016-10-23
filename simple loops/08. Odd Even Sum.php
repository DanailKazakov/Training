<?php

fscanf(STDIN, "%d", $num);

$odd = 0;
$even = 0;

for ($i = 1; $i <= $num; $i++){
    if (($i % 2) != 0){
        fscanf(STDIN, "%d", $temp);
        $odd = $odd + $temp;
    }
    else {
        fscanf(STDIN, "%d", $temp);
        $even = $even + $temp;
    }
}

if ($odd == $even){
    printf("yes\nsum = %d", $odd);
}
else {
    printf("no\ndiff = %d", abs($odd - $even));
}