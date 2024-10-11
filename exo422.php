<?php
namespace main;

require_once('./exo422/animal.php');
require_once('./exo422/chien.php');
require_once('./exo422/chat.php');

$monChien = new \chien\Chien();
$monChat = new \chat\Chat();
$monChien->cri();
$monChat->cri();

?>