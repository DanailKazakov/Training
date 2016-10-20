<?php

fscanf(STDIN, "%s", $n);

switch ($n){
    case "square":
        fscanf(STDIN, "%f", $m);
        $area = $m * $m;
        break;
    case "rectangle":
        fscanf(STDIN, "%f", $m);
        fscanf(STDIN, "%f", $t);
        $area = $m * $t;
        break;
    case "circle":
        fscanf(STDIN, "%f", $m);
        $area = $m * $m * pi();
        break;
    case "triangle":
        fscanf(STDIN, "%f", $m);
        fscanf(STDIN, "%f", $h);
        $area = $m * $h / 2;
        break;
}

fprintf(STDOUT, "%s", $area);