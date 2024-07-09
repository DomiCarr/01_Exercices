<?php 
// on charge les données utilisateur
require_once "./exo413_user.php";

// on charge la langue utilisateur
require_once "./exo413_language.php";

// on met les données utilisateur dans la variale user
$user = getUser();

// on charge le message d'accueil en fonction de la langue
if ($language == "FR") {
    require_once ("./languages/exo413_FR.php");
}
else {
    require_once ("./languages/exo413_EN.php");
}

// on affiche la page web
require_once "./exo413_template.php";


?>