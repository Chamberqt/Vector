<?php 

class Vector {

	private $mass;

	public function __construct($mass) {
		$this->mass = $mass;
	}

	public function summ($sum){

		for($i=0; $i < count($this->mass) ; $i++) { 
			$this->mass[$i] = $this->mass[$i] + $sum;
		}

	}

	public function multi($multipl){

		for($i=0; $i < count($this->mass) ; $i++) { 
			$this->mass[$i] = $this->mass[$i] * $multipl;
		}

	}

	public function toArray(){
		return $this->mass;
	}

}


$v = new Vector(array(1, 14, 52));
$v->summ(42);
echo implode(', ', $v->toArray()) . "<br><br>";;

$v->multi(-1.2);
echo implode(', ', $v->toArray());

?>

