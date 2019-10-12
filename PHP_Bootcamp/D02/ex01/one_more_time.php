#!/usr/bin/php
<?php
$array = preg_split("/\s+/", $argv[1]);
$days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
$months = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septebre", "octobre", "novembre", "decembre");
if(count($array) != 5)
	exit("Wrong format");
if(!array_search(strtolower($array[0]), $days))
	exit("Day first please!!");
if(($month = array_search(strtolower($array[2]), $months)))
	$month++;
else
	exit ("Wrong format of month.... lern hw tu spell fr pls");
if($array[1] < 1 || $array[1] > 31)
	exit ("Do you not know how dates work??");
if(strlen((string)$array[3]) != 4)
	exit ("Are you from the future/past?? Get it right next time");
$arraytmp = array($array[3], $month, $array[1]);
$arr = implode("-", $arraytmp);
$arraytmp = array($arr, $array[4]);
$arr = implode(" ", $arraytmp);
date_default_timezone_set("Europe/Paris");
if(($time = strtotime($arr)))
	exit("$time\n");
exit("wrong farmat");
?>