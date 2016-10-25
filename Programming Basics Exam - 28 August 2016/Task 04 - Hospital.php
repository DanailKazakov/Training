<?php

fscanf(STDIN, "%d", $days);

$doctors = 7;
$seenPatients = 0;
$notSeenPatients = 0;

for ($i = 1; $i <= $days; $i++){
    fscanf(STDIN, "%d", $patients);

    if ($i % 3 == 0 && $seenPatients < $notSeenPatients){
        $doctors = $doctors + 1;
    }

    if ($doctors >= $patients){
        $seenPatients = $seenPatients + $patients;
    }
    else {
        $seenPatients = $seenPatients + $doctors;
        $notSeenPatients = $notSeenPatients + ($patients - $doctors);
    }
}

printf("Treated patients: %d.\n", $seenPatients);
printf("Untreated patients: %d.", $notSeenPatients);