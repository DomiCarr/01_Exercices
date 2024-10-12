<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 305: PHP Nouvelle Techno : Tableaux </h1>
    </header>
    <?php

    echo "<pre>";

    // Declarer un tableau
    $tableau = ["Bonjour",15,true,58.15,"Brouette",45,false];

    var_dump($tableau[0]);
    var_dump($tableau[1]);
    var_dump($tableau[2]);
    var_dump($tableau[3]);

    // ajouter des valeurs à la fin
    echo ("<br> Ajouter des valeurs à la fin <br>");
    array_push($tableau,89,"Fin");

    // ajouter un élément à la fin (préconisé)
    $tableau[]="Fin";

    var_dump($tableau);

    // ajouter des valeurs au début
    echo ("<br> Ajouter des valeurs au début <br>");
    array_unshift($tableau,"Début");
    var_dump($tableau);

    // supprimer la derniere valeur et la mettre dans une variable
    $valeurFin = array_pop($tableau);
    echo ("<br> valeur de fin supprimée $valeurFin");
    echo ("<br> Tableau après la suppression <br>");
    var_dump($tableau);

    // supprimer la première valeur du tableau
    $valeurDebut = array_shift($tableau);
    echo ("<br> valeur de debut supprimée $valeurDebut");
    echo ("<br> Tableau après la suppression <br>");
    var_dump($tableau);

    // Diviser le tableau en parties de 2 valeurs avec de nouveaux index
    $tableau2 = array_chunk($tableau,2);
    echo ("<br> Tableau après la division nouveaux index <br>");
    var_dump($tableau2);

    // Diviser le tableau en parties de 2 valeurs en gardant les index (true)
    $tableau3 = array_chunk($tableau,2,true);
    echo ("<br> Tableau après la division anciens index <br>");
    var_dump($tableau3);

    // Mélanger un tableau de façon aléatoire
    shuffle($tableau);
    echo ("<br> Tableau après le melange <br>");
    var_dump($tableau);

    // Mélanger un tableau de façon aléatoire
    shuffle($tableau);
    echo ("<br> Tableau après le melange <br>");
    var_dump($tableau);

    // Tableau associatif
    $tableauAsso = [
        "nom" => "Gambier",
        "prenom" => "Benoit",
        "age"=> 25
    ];
    echo ("<br> Tableau associatif <br>");
    var_dump($tableauAsso);
    echo ("<br> Valeur de prenom");
    var_dump($tableauAsso["prenom"]);

    // Tableau multi dimensionnel
    $tableauMulti = [
        0 => [
        "nom" => "Gambier",
        "prenom" => "Benoit",
        "age"=> 25
        ],
    1 => [
        "nom" => "Cruise",
        "prenom" => "Tom",
        "age"=> 55
    ]];

    echo ("<br> Tableau multi <br>");
    var_dump($tableauMulti);

    echo "</pre>";

     ?>
</body>

</html>