<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dates and Time Unix</title>
</head>
	
<body>
<?php
	ini_set('display_errors', 1);
	echo time();
	echo "<br />";
	echo mktime(2, 30, 45, 10, 02, 2012);
	echo "<br />";
	// check date
	echo checkdate(12, 31, 2000) ? 'true' : 'false';
	echo "<br />";

	echo checkdate(2, 31, 2000) ? 'true' : 'false';
	echo "<br />";

	$unix_timestamp = strtotime("March 06, 2015");
	echo $unix_timestamp . '<br />';

	echo date('Y m d i:s:u');
	echo "<br />";

	echo strftime("%m/%a/%y");
	echo "<br />";

	function strip_zeroes_from_date($markedString = ''){
		// remove leading zeroes
		$no_zeroes = str_replace('*0', '', $markedString);
		// remove remaining marks
		$cleanString = str_replace('*', '', $no_zeroes);

		return $cleanString;
	}

	echo strip_zeroes_from_date(strftime("*%m/%a/%y"));

	echo "<hr />";
	$dt = time();
	$mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);

	echo $mysql_datetime;


?>
</body>

</html>