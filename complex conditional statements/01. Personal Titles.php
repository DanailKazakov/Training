<?php

fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%s", $m);

if ($m == "m" && $n < 16){
    printf("Master");
}
elseif($m == "m" && $n >= 16){
    printf("Mr.");
}
elseif($m == "f" && $n < 16){
    printf("Miss");
}
elseif($m == "f" && $n >= 16){
    printf("Ms.");
}

