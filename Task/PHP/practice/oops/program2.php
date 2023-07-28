<?php
class parentclass{
	public function publicmethod(){
		echo "This is public method of parent class" ;
	}
	protected function protectedmethod(){
		echo "This is protected method of parent class" ;
	}
	private function privatemethod(){
		echo "This is private method of parent class" ;
	}
}
class childclass extends parentclass{
	public function childmethod(){
		$this->protectedmethod();
		//$this->privatemethod(); //this will produce error
	}
}
$obj=new childclass();
$obj->publicmethod();
$obj->childmethod();
?>