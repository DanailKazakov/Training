<?php

fscanf(STDIN, "%d", $n);

if ($n < 100){
    fprintf(STDOUT, "Less than 100");
}
elseif ($n >= 100 && $n <= 200){
    fprintf(STDOUT, "Between 100 and 200");
}
elseif ($n > 200){
    fprintf(STDOUT, "Greater than 200");
}