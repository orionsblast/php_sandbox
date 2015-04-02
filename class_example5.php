<?php

class Person {

	var $first_name;
	var $last_name;

	var $arm_count = 2;
	var $leg_count = 2;

	function say_hello()
	{
		echo "Hello from inside the class " . get_class($this) . "<br />";
	}
	public function full_name()
	{
		return $this->first_name . " " . $this->last_name;
	}
}

$person = new Person();
echo $person->arm_count;

$person->arm_count = 3;
$person->first_name = 'Lucy';
$person->last_name = 'Sue';

$newPerson = new Person();

$newPerson->first_name = 'Ethel';

echo $person->first_name . "<br />";
echo $newPerson->first_name . "<br />";

echo $person->full_name();

$vars = get_class_vars('Person');
foreach ($vars as $var => $value) {
	echo "{$var}: {$value}<br />";
}

echo property_exists('Person', 'first_name') ? 'true' : 'false';


?>