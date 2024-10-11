<?php 

namespace chat;

class Chat extends \animal\Animal implements \animal\CriAnimalInterface {
	public function cri(){
		echo("<br> Miaou");
	}
}

?>