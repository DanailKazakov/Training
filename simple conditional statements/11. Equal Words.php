<?php

fscanf(STDIN, "%s", $n);
fscanf(STDIN, "%s", $m);

if (strtoupper($n) == strtoupper($m)){
    fprintf(STDOUT, "yes");
}
else {
    fprintf(STDOUT, "no");
}