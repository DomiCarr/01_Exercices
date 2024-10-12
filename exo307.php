<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 307: PHP Nouvelle Techno : Fonctions</h1>
    </header>

    <?php 
    function fadd($nb1, $nb2){
        echo $nb1 + $nb2;
    }

    // fontion avec des paramètres optionnels avec les champs nommés
    // il faut mettre les paramètres optionnels à la fin
    function fsaluer($prenom,$nom,$civilité="",$salutation="Hello"){
        echo "$salutation $civilité $prenom $nom";
    }

    ?>

    <p><?php fadd(12, 52); ?></p>
    <p><?php fsaluer(prenom: "Tom",nom: "Cruise", salutation: "Bonjour"); ?></p>
    <p><?php fsaluer(prenom: "Tom",nom: "Cruise", civilité: "Mister"); ?></p>
    <p><?php fsaluer(prenom: "Tom",nom: "Cruise"); ?></p>



</body>

</html>