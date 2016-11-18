<?php

fscanf(STDIN, "%d", $n);

$FirstAndLast = str_repeat("*", 2 * $n) . str_repeat(" ", $n) . str_repeat("*", 2 * $n);

$output = "";

$output = $output . $FirstAndLast . "\n";

$sides = str_repeat("/", 2 * $n - 2);



for ($i = 1; $i <= $n - 2; $i++){
    if ($i == floor(($n - 1)/2)){
        $temp = "*" . $sides . "*" . str_repeat("|", $n) . "*" . $sides . "*";
        $output = $output . $temp . "\n";
    }
    else {
        $temp = "*" . $sides . "*" . str_repeat(" ", $n) . "*" . $sides . "*";
        $output = $output . $temp . "\n";
    }
}

$output = $output . $FirstAndLast;

printf("%s", $output);