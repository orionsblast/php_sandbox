<?php

class Person {
	function say_hello(){
		echo "Hello from inside a class";
	}
}

$person = new Person();
$person2 = new Person();

echo get_class($person) . "<br />";

if(is_a($person, 'Person')){
	echo "Yep, it is a person" . "<br />";
} else{
	echo "Not a person." . "<br />";
}

$person->say_hello();


?>