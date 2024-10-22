<?php 

// se deconnecter
// on demarre la session
session_start();

// si la personne n'est connectée on redirige vers la page de connexion
if (!isset($_SESSION["user"])){
    header("Location: ./exo311-connection_user.php");
    exit;
}

// on enleve la session avec la fonction unset qui efface une variable
unset($_SESSION["user"]);
header("Location: ./exo311.php");

?>