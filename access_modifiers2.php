<?php 

/**
* 
*/
class SetterGetterExample
{
	private $a = 1;

	public function get_a(){
		return $this->a;
	}

	public function set_a($value){
		$this->a = $value;
	}

}

$example = new SetterGetterExample();
echo $example->get_a();

$example->set_a('2');
echo $example->get_a();

//This is an add.
?>

