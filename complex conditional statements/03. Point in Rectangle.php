<?php

fscanf(STDIN, "%f", $x1);
fscanf(STDIN, "%f", $y1);
fscanf(STDIN, "%f", $x2);
fscanf(STDIN, "%f", $y2);
fscanf(STDIN, "%f", $x);
fscanf(STDIN, "%f", $y);

if ($x1 <= $x && $x <= $x2 && $y1 <= $y && $y <= $y2){
    printf("Inside");
}
else {
    printf("Outside");
}