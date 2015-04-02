<?php
	$a = 'Kevin';
	$b = 'Mary';
	$c = 'Joe';
	$d = 'Larry';

	$students = array('a', 'c', 'e');
	foreach ($students AS $key => $seat) {
		echo $seat . ' ' . $$seat . "<br />";
	}
?>