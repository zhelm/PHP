#!/usr/bin/php
<?php
while(1) {
	$str = trim(fgets(STDIN));
	if (is_numeric($str)) {
		if($str % 2 == 0)
			echo "The number $str is even";
		else
			echo "The number $str is odd";
	}
	else if(feof(STDIN)){
		print("\n");
		break;
	}
	else {
		echo "'$str'";
	}
}
?>