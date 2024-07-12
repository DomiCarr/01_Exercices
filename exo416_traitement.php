<?php
// On récupère la valeur du champ "user_input" envoyé en POST depuis le formulaire HTML
$user_input = $_POST['user_input'];

// On filtre la valeur du champ "user_input" avec la fonction htmlspecialchars() pour supprimer les caractères indésirables
 $sanitized_input = htmlspecialchars($user_input, ENT_QUOTES | ENT_HTML5, 'UTF-8');

 echo "<br> AVANT: " . $user_input;
 echo "<br> APRES: " . $sanitized_input;

?>