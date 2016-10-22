<?php

fscanf(STDIN, "%d", $h); //10
fscanf(STDIN, "%d", $x); //13
fscanf(STDIN, "%d", $y); //10

//horizontal figure
$x1 = 0;
$y1 = 0;
$x2 = 3 * $h;
$y2 = $h;

//vertical figure
$x3 = $h;
$y3 = 0;
$x4 = 2 * $h;
$y4 = 4 * $h;

//function inside
function inside($x, $y, $x1, $y1, $x2, $y2){
    if ($x1 < $x && $x < $x2 && $y1 < $y && $y < $y2){
        return true;
    }
    return false;
}

// function ouside
function outside($x, $y, $x1, $y1, $x2, $y2){
    if ($x < $x1 || $x > $x2 || $y < $y1 || $y > $y2){
        return true;
    }
    return false;
}

//checks what to print
if (inside($x, $y, $x1, $y1, $x2, $y2) || inside($x, $y, $x3, $y3, $x4, $y4)){
    printf("inside");
}
elseif (outside($x, $y, $x1, $y1, $x2, $y2) && outside($x, $y, $x3, $y3, $x4, $y4)){
    printf("outside");
}
else {
    printf("border");
}