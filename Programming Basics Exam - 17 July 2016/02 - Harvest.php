<?php

fscanf(STDIN, "%d", $landArea);
fscanf(STDIN, "%f", $kg);
fscanf(STDIN, "%d", $litersNeeded);
fscanf(STDIN, "%d", $workers);

$yield = $landArea * $kg;

$totalYield = 0.4 * $yield / 2.5;

$difference = abs($totalYield - $litersNeeded);

$perworker = $difference / $workers;

if ($totalYield >= $litersNeeded){
    printf("Good harvest this year! Total wine: %d liters.\n", floor($totalYield));
    printf("%d liters left -> %d liters per person.", ceil($difference), ceil($perworker));
}
else {
    printf("It will be a tough winter! More %d liters wine needed.", floor($difference));
}
