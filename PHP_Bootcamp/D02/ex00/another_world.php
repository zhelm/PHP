#!/usr/bin/php
<?php
	$ret = preg_split('/\s+/', $argv[1]);
	$space = implode(" ", $ret);
	echo "$space\n";
?>