<?php

fscanf(STDIN, "%d", $n);

$starline = str_repeat("*", $n);

for ($i = 1; $i <= $n; $i++){
    printf("%s\n", $starline);
}