<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Variable Variables</title>
</head>

<body>
<?php
	$a = 'hello';
	$hello = 'Hello Everyone.';

	echo $a . "<br />";
	echo $hello . "<br />";

	echo $$a . "<br />";
?>
</body>

</html>