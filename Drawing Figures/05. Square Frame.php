<?php

fscanf(STDIN, "%d", $n);

$firstAndLast = "+ " . str_repeat("- ", $n - 2) . "+";
$middle = "| " . str_repeat("- ", $n - 2) . "|";

printf("%s\n", $firstAndLast);

for ($i = 1; $i <= $n - 2; $i++){
    printf("%s\n", $middle);
}

printf("%s", $firstAndLast);