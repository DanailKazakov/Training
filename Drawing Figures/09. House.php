<?php

fscanf(STDIN, "%d", $n);

for ($i = 1; $i <= floor(($n + 1)/2); $i++){
    if ($n % 2 == 0){
        $line = str_repeat("-", floor(($n - 1)/2 + 1 - $i)) . str_repeat("*", 2 * $i) . str_repeat("-", floor(($n - 1)/2 + 1 - $i));
        printf("%s\n", $line);
    }
    else {
        $line = str_repeat("-", floor(($n - 1)/2 + 1 - $i)) . str_repeat("*", 1 + ($i - 1) * 2) . str_repeat("-", floor(($n - 1)/2 + 1 - $i));
        printf("%s\n", $line);
    }
}

for ($i = 1; $i <= floor($n / 2); $i++){
    $line = "|" . str_repeat("*", $n - 2) . "|";
    printf("%s\n", $line);
}