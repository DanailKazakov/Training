<?php

fscanf(STDIN, "%d", $n);

for ($i = 0; $i<=$n; $i++){
    $temp = pow(2, $i);
    printf("%d\n", $temp);
}