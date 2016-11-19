<?php

fscanf(STDIN, "%d", $sideOfArea);
fscanf(STDIN, "%f", $widthOfTile);
fscanf(STDIN, "%f", $lenghtOfTile);
fscanf(STDIN, "%d", $widthOfBench);
fscanf(STDIN, "%d", $lenghtOfBench);

$totalArea = $sideOfArea * $sideOfArea;
$areaOfTile = $widthOfTile * $lenghtOfTile;
$areaOfBench = $widthOfBench * $lenghtOfBench;

$area = $totalArea - $areaOfBench;

$tilesNeeded = $area / $areaOfTile;

$timeNeeded = $tilesNeeded * 0.2;

printf("%f\n%f", $tilesNeeded, $timeNeeded);