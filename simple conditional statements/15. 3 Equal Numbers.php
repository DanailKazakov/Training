<?php

fscanf(STDIN, "%f", $n1);
fscanf(STDIN, "%f", $n2);
fscanf(STDIN, "%f", $n3);

$n1 = (string)$n1;
$n2 = (string)$n2;
$n3 = (string)$n3;

if ($n1 == $n2 && $n2 == $n3){
    fprintf(STDOUT, "yes");
}
else {
    fprintf(STDOUT, "no");
}