<?php

fscanf(STDIN, "%s", $leapOrNot);
fscanf(STDIN, "%f", $praznici);
fscanf(STDIN, "%f", $homeWeekends);

$weekendGamesInSofia = 3/4 * (48 - $homeWeekends);
$hollidayGames = 2/3 * $praznici;

$result = $homeWeekends + $weekendGamesInSofia + $hollidayGames;

if ($leapOrNot == "leap"){
    $result = $result + 15/100*$result;
}

printf("%d", floor($result));