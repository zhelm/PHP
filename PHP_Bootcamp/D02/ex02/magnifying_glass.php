#!/usr/bin/php
<?php
$string = preg_replace_callback('/<a.?title="\K(.?)(?=")/', function($matches){return strtoupper($matches[0]);}, file_get_contents("page.html"));
echo preg_replace_callback('/<a.?>\K(.?)(?=<)/', function($matches){return strtoupper($matches[0]);}, $string);
?>