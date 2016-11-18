<?php

fscanf(STDIN, "%d", $n);

for ($i = 1; $i <= $n; $i++){
    $dollarline = str_repeat("$ ", $i);
    printf("%s\n", $dollarline);
}