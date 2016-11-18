<?php

fscanf(STDIN, "%d", $n);

$starline = str_repeat("* ", $n - 1) . "*";

for ($i = 1; $i <= $n; $i++){
    printf("%s\n", $starline);
}