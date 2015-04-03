<?php 

/**
* 
*/
class Example
{
	public $a = 1;
	protected $b = 2;
	private $c = 3;

	function show_abc()
	{
		echo $this->a;
		echo $this->b;
		echo $this->c;
	}

	public function hello_everyone(){
		return "Hello everyone";
	}

	protected function hello_family(){
		return "Hello family";
	}

	private function hello_me(){
		return "Hello me";
	}

	public function hello(){
		$output = $this->hello_everyone();
		$output .= $this->hello_family();
		$output .= $this->hello_me();
		return $output;
	}

}

/**
* 
*/
class SubExample extends Example
{
	
}

$example = new Example;

echo $example->hello();

//Just a comment.

?>