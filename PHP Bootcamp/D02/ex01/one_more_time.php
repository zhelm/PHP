#!/usr/bin/php
<?php
//   '2014-06-25 14:50:03'
// Mardi 12 Novembre 2013 12:02:21
$array = preg_split("/\s+/", $argv[1]);
if(count($array) != 5)
	exit("Wrong format");
if(strtolower($array[2]) == "janvier")
	$month = "01";
else if(strtolower($array[2]) == "fevrier")
	$month = "02";
else if(strtolower($array[2]) == "mars")
	$month = "03";
else if(strtolower($array[2]) == "avril")
	$month = "04";
else if(strtolower($array[2]) == "mai")
	$month = "05";
else if(strtolower($array[2]) == "juin")
	$month = "06";
else if(strtolower($array[2]) == "juillet")
	$month = "07";
else if(strtolower($array[2]) == "aout")
	$month = "08";
else if(strtolower($array[2]) == "septebre")
	$month = "09";
else if(strtolower($array[2]) == "octobre")
	$month = "10";
else if(strtolower($array[2]) == "novembre")
	$month = "11";
else if(strtolower($array[2]) == "decembre")
	$month = "12";
else
	exit("Wrong format");
$arraytmp = array($array[3], $month, $array[1]);
$arr = implode("-", $arraytmp);
$arraytmp = array($arr, $array[4]);
$arr = implode(" ", $arraytmp);
$time = strtotime($arr);
echo "$time";
?>