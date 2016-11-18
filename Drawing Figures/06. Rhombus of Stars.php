<?php

fscanf(STDIN, "%d", $n);

for ($i = 1; $i <= $n; $i++){
    $line1 = str_repeat(" ", $n - $i) . str_repeat("* ", $i);
    printf("%s\n", $line1);
}

for ($i = 1; $i <= $n - 1; $i++){
    $line2 = str_repeat(" ", $i) . str_repeat("* ", $n - $i);
    printf("%s\n", $line2);
}