<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Server Variable</title>
</head>

<body>
<?php
	echo "Server details: <br />";
	echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br />";
	echo "Server Address: " . $_SERVER['SERVER_ADDR'] . "<br />";
	echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br />";
	echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br />";

	echo "<br />Page Details: <br />";
	echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "<br />";
	echo "PHP Script File Name: " . $_SERVER['SCRIPT_FILENAME'] . "<br />";
	echo "<br />";

	echo "<br />Request Details: <br />";
	echo "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "<br />";
	echo "REMOTE_PORT: " . $_SERVER['REMOTE_PORT'] . "<br />";
	echo "REMOTE_ADDR: " . $_SERVER['REQUEST_URI'] . "<br />";
	echo "REMOTE_ADDR: " . $_SERVER['QUERY_STRING'] . "<br />";
	echo "REMOTE_ADDR: " . $_SERVER['REQUEST_METHOD'] . "<br />";
	echo "REMOTE_ADDR: " . $_SERVER['REQUEST_TIME'] . "<br />";
	echo "REMOTE_ADDR: " . $_SERVER['HTTP_REFERER'] . "<br />";
	echo "REMOTE_ADDR: " . $_SERVER['HTTP_USER_AGENT'] . "<br />";

	echo "<br />";

?>
</body>

</html>