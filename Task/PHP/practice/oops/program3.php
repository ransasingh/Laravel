<?php
class Car{
	public $color;
	public $model;
	public function __construct($color, $model){
		$this->color = $color;
		$this->model = $model;
	}
	public function talk(){
		return "I have a " . $this->color . " " . $this->model . "!";
	}
}
$myCar = new Car("blue", "Civic");
echo $myCar -> talk();
?>