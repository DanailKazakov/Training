<?php

fscanf(STDIN, "%f", $x1);
fscanf(STDIN, "%f", $y1);
fscanf(STDIN, "%f", $x2);
fscanf(STDIN, "%f", $y2);
fscanf(STDIN, "%f", $x);
fscanf(STDIN, "%f", $y);

if (($x == $x1 || $x == $x2) && $y >= $y1 && $y <= $y2){
    printf("Border");
}
elseif (($y == $y1 || $y == $y2) && $x >= $x1 && $x <= $x2){
    printf("Border");
}
else {
    printf("Inside / Outside");
}