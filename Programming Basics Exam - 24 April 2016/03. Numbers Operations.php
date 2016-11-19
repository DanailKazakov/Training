<?php

fscanf(STDIN, "%d", $N1);
fscanf(STDIN, "%d", $N2);
fscanf(STDIN, "%s", $operator);

$dash = "-";

switch ($operator){
    case "+":
        $result = $N1 + $N2;
        if ($result % 2 == 0){
            $eo = "even";
        }
        else {
            $eo = "odd";
        }
        printf("%d %s %d = %s %s %s", $N1, $operator, $N2, $result, $dash, $eo);
        break;
    case "-":
        $result = $N1 - $N2;
        if ($result % 2 == 0){
            $eo = "even";
        }
        else {
            $eo = "odd";
        }
        printf("%d %s %d = %s %s %s", $N1, $operator, $N2, $result, $dash, $eo);
        break;
    case "*":
        $result = $N1 * $N2;
        if ($result % 2 == 0){
            $eo = "even";
        }
        else {
            $eo = "odd";
        }
        printf("%d %s %d = %s %s %s", $N1, $operator, $N2, $result, $dash, $eo);
        break;
    case "/":
        if ($N2 == 0){
            printf("Cannot divide %d by zero", $N1);
        }
        else {
            $result = $N1 / $N2;
            printf("%s %s %s = %.2f", $N1, $operator, $N2, $result);
        }
        break;
    case "%":
        if ($N2 == 0){
            printf("Cannot divide %d by zero", $N1);
        }
        else {
            $result = $N1 % $N2;
            printf("%s %s %s = %d", $N1, $operator, $N2, $result);
        }
}