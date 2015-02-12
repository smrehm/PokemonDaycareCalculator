<?php

function findGroup($inputPokemon) {
	$i = 0;
	$j = 0;
	global $groupsPKMN;
	foreach ($groupsPKMN as $group) {
		foreach ($group as $pokemon) {
			if ($inputPokemon == $pokemon) { return $i; }
			$j = $j + 1;
		}
		$i = $i + 1;
	}
}

function getEXP($group, $level) {
	global $LevelsEXP;
	return $LevelsEXP[$group][$level];
}

function calculateTime($pokemon, $currentLevel, $targetLevel) {
	$timerate = 14.8; // steps per second
	$group = findGroup($pokemon);
	$currentEXP = getEXP($group, $currentLevel);
	$targetEXP = getEXP($group, $targetLevel);
	$neededEXP = $targetEXP - $currentEXP;
	$totaltime = $neededEXP/$timerate;
	$timeInSeconds = Floor($totaltime);
	
	return $timeInSeconds;
}

function getHours($timeInSeconds){
	$hours = Floor($timeInSeconds/3600);
	return $hours;
}

function getMinutes($timeInSeconds) {
	$minutes = Floor($timeInSeconds/60);
	$hours = Floor($minutes/60);
	$minRem = $minutes - (60 * $hours);
	return $minRem;
}

function getSeconds($timeInSeconds) {
	$minutes = Floor($timeInSeconds/60);
	$secRem = $timeInSeconds - (60 * $minutes);
	return $secRem;
}

function printClock($timeInSeconds) {
	echo getHours($time) . ":" . getMinutes($time) . ":" . getSeconds($time);
}

//$pokemon = $_GET['pokemon'];
//$currentLevel = $_GET['currentLevel'];
//$targetLevel = $_GET['targetLevel'];

$pokemon = "Noivern"; //dev
$currentLevel = 1; //dev
$targetLevel = 50; //dev


?>