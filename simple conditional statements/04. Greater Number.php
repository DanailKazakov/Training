<?php

fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $m);

$numbers = array($n,$m);

if ($numbers[0] >= $numbers[1]){
    fprintf(STDOUT, "%d", $numbers[0]);
}
else {
    fprintf(STDOUT, "%d", $numbers[1]);
}