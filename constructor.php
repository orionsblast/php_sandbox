<?php
	/**
	* Class
	*/
	class Table
	{
		private $legs;
		static public $total_tables = 0;
		
		function __construct($leg_count = 4)
		{
			$this->legs = $leg_count;
			self::$total_tables++;
		}
		function getLegs()
		{
			return $this->legs;
		}
	}

	$table = new Table(2);
	$table1 = new Table(3);
	$table2 = new Table(6);

	echo $table2->getLegs();
	echo Table::$total_tables;

?>