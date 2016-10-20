<?php

fscanf(STDIN, "%f", $n);

if ($n <= 10){
    fprintf(STDOUT, "slow");
}
elseif ($n > 10 && $n <= 50){
    fprintf(STDOUT, "average");
}
elseif ($n > 50 && $n <= 150){
    fprintf(STDOUT, "fast");
}
elseif ($n > 150 && $n <= 1000){
    fprintf(STDOUT, "ultra fast");
}
elseif ($n > 1000){
    fprintf(STDOUT, "extremely fast");
}