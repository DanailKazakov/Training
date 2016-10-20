<?php

fscanf(STDIN, "%d", $n);

$numbers = array($n);

if ($numbers[0] % 2 == 0){
    fprintf(STDOUT, "even");
}
else {
    fprintf(STDOUT, "odd");
}