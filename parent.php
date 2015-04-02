<?php

/**
* This is a class
*/
class A 
{
	static $a = 1;

	static function modified_a() {
		return self::$a + 10;
	}
}

/**
* This a class
*/
class B extends A
{
	static function attr_test() {
		echo self::$a;
	}
	// static function method_test() {
	// 	echo self::modified_a();
	// }
}
echo B::$a . "<br />";
echo B::modified_a() . "<br />";
echo B::attr_test();
echo B::modified_a();

?>