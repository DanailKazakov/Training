<?php

fscanf(STDIN, "%d", $n);

for ($i = 1; $i <= $n; $i = $i + 3) {
    printf("%d\n", $i);
}