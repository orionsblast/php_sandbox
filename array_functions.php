<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Array Functions</title>
</head>

<body>
<?php
	$numbers = array(1, 2, 3, 4, 5, 6);
	
	var_dump($numbers);
	echo "<br /><br />";

	$a = array_shift($numbers);
	echo "a:" . $a . "<br ?>";

	var_dump($numbers);
	echo "<br /><br />";

	echo (array_unshift($numbers, 'first'));
	
	var_dump($numbers);
	echo "<br /><br />";	

	echo "<hr />";

	echo array_pop($numbers);

	var_dump($numbers);
	echo "<br /><br />";	

	echo array_push($numbers, 'last');

	var_dump($numbers);
	echo "<br /><br />";	

	echo date(time());
?>
</body>

</html>