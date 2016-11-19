<?php

fscanf(STDIN, "%d", $n);

for ($i = 1; $i <= $n; $i = 2 * $i + 1){
    printf("%d\n", $i);
}