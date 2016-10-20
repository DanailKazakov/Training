<?php

fscanf(STDIN, "%d", $n);

function onesAndTeens($m){

    switch ($m){
        case 1:
            fprintf(STDOUT, "%s", "one");
            break;
        case 2:
            fprintf(STDOUT, "%s", "two");
            break;
        case 3:
            fprintf(STDOUT, "%s", "three");
            break;
        case 4:
            fprintf(STDOUT, "%s", "four");
            break;
        case 5:
            fprintf(STDOUT, "%s", "five");
            break;
        case 6:
            fprintf(STDOUT, "%s", "six");
            break;
        case 7:
            fprintf(STDOUT, "%s", "seven");
            break;
        case 8:
            fprintf(STDOUT, "%s", "eight");
            break;
        case 9:
            fprintf(STDOUT, "%s", "nine");
            break;
        case 10:
            fprintf(STDOUT, "%s", "ten");
            break;
        case 11:
            fprintf(STDOUT, "%s", "eleven");
            break;
        case 12:
            fprintf(STDOUT, "%s", "twelve");
            break;
        case 13:
            fprintf(STDOUT, "%s", "thirteen");
            break;
        case 14:
            fprintf(STDOUT, "%s", "fourteen");
            break;
        case 15:
            fprintf(STDOUT, "%s", "fifteen");
            break;
        case 16:
            fprintf(STDOUT, "%s", "sixteen");
            break;
        case 17:
            fprintf(STDOUT, "%s", "seventeen");
            break;
        case 18:
            fprintf(STDOUT, "%s", "eighteen");
            break;
        case 19:
            fprintf(STDOUT, "%s", "nineteen");
            break;
    }
}

function tens($m){
    switch($m){
        case 2:
            printf("%s", "twenty");
            break;
        case 3:
            printf("%s", "thirty");
            break;
        case 4:
            printf("%s", "fourty");
            break;
        case 5:
            printf("%s", "fifty");
            break;
        case 6:
            printf("%s", "sixty");
            break;
        case 7:
            printf("%s", "seventy");
            break;
        case 8:
            printf("%s", "eighty");
            break;
        case 9:
            printf("%s", "ninety");
            break;
    }
}

if ($n == 0){
    fprintf(STDOUT, "zero");
}
elseif ($n < 0 || $n > 100){
    fprintf(STDOUT, "invalid number");
}
elseif ($n == 100){
    fprintf(STDOUT, "one hundred");
}
elseif ($n > 0 && $n < 100){
    if ($n < 20){
        onesAndTeens($n);
    }
    elseif ($n >= 20 && $n < 100){
        $g = intdiv($n, 10);
        $t = $n % 10;
        if ($t == 0){
            tens($g);
        }
        else{
            tens($g) . printf(" ") . onesAndTeens($t);
        }
    }
}