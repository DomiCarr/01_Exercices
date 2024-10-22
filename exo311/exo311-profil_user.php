<?php 
session_start();

// On inclus le header
include_once "./exo311-header.php";

// On inclus la navbar
include_once "./functions/exo311-navbar.php";
?>

<h1>Profil de <?=$_SESSION["user"]["username"] ?></h1>

<p>Username: <?=$_SESSION["user"]["username"] ?></p>
<p>Email: <?=$_SESSION["user"]["email"] ?></p>

<?php 

    // On inclus le heafooter
    include_once "./exo311-footer.php";

?>