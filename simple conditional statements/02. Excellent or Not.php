<?php
    fscanf(STDIN, "%f", $n);
    $numbers = array($n);

    if ($numbers[0] >= 5.50){
        fprintf(STDOUT, "Excellent!");
    }
    else {
        fprintf(STDOUT, "Not excellent.");
    }