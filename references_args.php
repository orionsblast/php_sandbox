<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>References As Function Arguments</title>
</head>

<body><?php

	function ref_test(&$var){
		$var *= 2;
	}

	$a = 10;
	ref_test($a);
	echo $a;

	function ref_test2(){
		global $a;
		$a *= 2;
	}

	$a = 10;
	ref_test2();
	echo $a;

?></body>

</html>