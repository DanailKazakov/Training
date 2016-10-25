<?php

fscanf(STDIN, "%d", $workDays);
fscanf(STDIN, "%f", $averageDailyIncome);
fscanf(STDIN, "%f", $dollarExchangeRate);

$monthlyIncome = $workDays * $averageDailyIncome;
$yearlyBonus = 2.5 * $monthlyIncome;
$yearlyIncome = 12 * $monthlyIncome + $yearlyBonus;
$taxes = 25 / 100 * $yearlyIncome;
$yearlyProfits = $yearlyIncome - $taxes;
$yearlyProfitsInBGN = $yearlyProfits * $dollarExchangeRate;
$dailyProfitsInBGN = $yearlyProfitsInBGN / 365;

printf("%.2f", $dailyProfitsInBGN);