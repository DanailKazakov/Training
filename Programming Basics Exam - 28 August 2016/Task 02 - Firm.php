<?php

fscanf(STDIN, "%d", $neededHours);
fscanf(STDIN, "%d", $availableDays);
fscanf(STDIN, "%d", $overtimeWorkers);

$totalHours = floor(($availableDays * 0.9) * 8);
$overtimeHours = $availableDays * $overtimeWorkers * 2;

if ($totalHours + $overtimeHours >= $neededHours){
    printf("Yes!%d hours left.", ($totalHours + $overtimeHours) - $neededHours);
}
else {
    printf("Not enough time!%d hours needed.", $neededHours - ($totalHours + $overtimeHours));
}