<?php
	/**
	* 
	*/
	class Beverage
	{
		public $name;

		function __construct() {
			echo "New beverage was created. <br />";
		}

		function __clone() {
			echo "Existing beverage has been cloned. <br />";
		}
	}

	$a = new Beverage();
	$a->name = "coffee";
	$b = $a;
	$b->name = "tea";
	echo $a->name;

	echo "<hr>";

	$c = clone $a;
	$c->name = "orange juice";
	echo $a->name;
?>