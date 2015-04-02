<?php 

/**
* 
*/
class Student
{
	static $total_students = 0;

	static function welcome_students($var="Hello") {
		echo "{$var} students.";
	}

	static function add_student(){

		Student::$total_students ++;
	}
	
}

Student::welcome_students('Hi');

class One 
{
	static $foo;
}

/**
* 
*/
class Two extends One
{
}

class Three extends One
{
}

One::$foo = 1;
Two::$foo = 2;
Three::$foo = 3;

echo One::$foo;
echo Two::$foo;
echo Three::$foo;

$make::an_error();
?>