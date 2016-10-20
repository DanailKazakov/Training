<?php

fscanf(STDIN, "%s", $n);

if ($n == "s3cr3t!P@ssw0rd"){
    fprintf(STDOUT, "Welcome");
}
else {
    fprintf(STDOUT, "Wrong password!");
}