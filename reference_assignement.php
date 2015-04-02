<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Reference Assignment</title>
</head>

<body><?php
	ini_set('display_errors', 0);
	$a = 1;
	$b = $a;
	$b = 2;
	echo "a:{$a} / b: {$b}<br />";

	$a = 1;
	$b =& $a;
	$b = 2;
	echo "a:{$a} / b: {$b}<br />";

	unset($b);
	echo "a:{$a} / b: {$b}<br />";



?></body>

</html>