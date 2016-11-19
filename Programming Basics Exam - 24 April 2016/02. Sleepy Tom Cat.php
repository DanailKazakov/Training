<?php

fscanf(STDIN, "%d", $daysOff);

$playTime = ($daysOff * 127) + ((365 - $daysOff) * 63);

if ($playTime > 30000){
    printf("Tom will run away\n");

    $overTime = $playTime - 30000;
    $hours = floor($overTime / 60);
    $minutes = $overTime % 60;

    printf("%s hours and %s minutes more for play", $hours, $minutes);
}
else {
    printf("Tom sleeps well\n");

    $underTime = 30000 - $playTime;
    $hours = floor($underTime / 60);
    $minutes = $underTime % 60;

    printf("%s hours and %s minutes less for play", $hours, $minutes);
}