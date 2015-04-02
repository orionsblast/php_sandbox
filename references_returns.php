<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>References As Function Return Values</title>
</head>

<body><?php

	function &ref_returns(){
		global $a;
		$a *= 2;
		return $a;
	}

	$a = 10;
	$b =& ref_returns();

	echo "a: {$a} / b: {$b}<br />";

	$b = 30;

	echo "a: {$a} / b: {$b}<br />";

	function &increment(){
		static $var = 0;
		$var++;
		return $var;
	}

	$a =& increment();
	increment();
	$a++;
	increment();

	echo "a: {$a}<br />";

?></body>

</html>