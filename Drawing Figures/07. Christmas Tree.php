<?php

fscanf(STDIN, "%d", $n);

for ($i = 0; $i <= $n; $i++){
    $line = str_repeat(" ", $n - $i) . str_repeat("*", $i) . " | " . str_repeat("*", $i) . str_repeat(" ", $n - $i);
    printf("%s\n", $line);
}