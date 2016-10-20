<?php

fscanf(STDIN, "%d", $n);

switch($n){
    case 1:
        fprintf(STDOUT, "one");
        break;
    case 2:
        fprintf(STDOUT, "two");
        break;
    case 3:
        fprintf(STDOUT, "three");
        break;
    case 4:
        fprintf(STDOUT, "four");
        break;
    case 5:
        fprintf(STDOUT, "five");
        break;
    case 6:
        fprintf(STDOUT, "six");
        break;
    case 7:
        fprintf(STDOUT, "seven");
        break;
    case 8:
        fprintf(STDOUT, "eight");
        break;
    case 9:
        fprintf(STDOUT, "nine");
        break;
    default:
        fprintf(STDOUT, "number too big");
}