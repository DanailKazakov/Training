<?php

fscanf(STDIN, "%d", $n);

$dot = ".";
$underscore = "_";
$right = "//";
$left = "\\\\";

$first = str_repeat($dot, $n + 1) . str_repeat($underscore, 2 * $n + 1) . str_repeat($dot, $n + 1);
printf("%s\n", $first);

for ($i = 1; $i <= $n; $i++){
    $second = str_repeat($dot, $n + 1 - $i) . $right . str_repeat($underscore, 2 * $n - 1 + ($i - 1) * 2) . $left . str_repeat($dot, $n + 1 - $i);
    printf("%s\n", $second);
}

$stop = $right . str_repeat($underscore, (2 * $n - 1 + ($i - 1) * 2 - 5) / 2) .  "STOP!" . str_repeat($underscore, (2 * $n - 1 + ($i - 1) * 2 - 5) / 2) . $left;
printf("%s\n", $stop);

for ($i = 0; $i <= $n - 1; $i ++){
    $last = str_repeat($dot, $i) . $left .  str_repeat($underscore, 4 * $n - 1 - 2 * $i) . $right .  str_repeat($dot, $i);
    printf("%s\n", $last);
}