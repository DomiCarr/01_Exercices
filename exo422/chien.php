<?php 

namespace chien;

class Chien extends \animal\Animal implements \animal\CriAnimalInterface {
	public function cri(){
		echo("<br> Wouf");
	}
}

?>