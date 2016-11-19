<?php

fscanf(STDIN, "%d", $n);

while ($n < 1 || $n > 100) {
    fscanf(STDIN, "%d", $n);
}

printf("%d", $n);