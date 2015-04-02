<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Variable Scope</title>
</head>

<body>
<?php
	$var = 1;
	function test1($theVar){
		$var = 2;
		echo $var;
		echo $theVar;
	}

	test1($var);

	echo "<hr />";
	
	function test2(){
		global $var;
		echo ++$var;
	}

	test2();
	echo "<br />" . $var;
	
	function test3(){
		static $var = 2;
		echo ++$var;
	}

	test3();
	test3();
	test3();
	test3();

?>
</body>

</html>