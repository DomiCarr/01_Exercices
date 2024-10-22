<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 309: PHP Nouvelle Techno : Boucles for et foreach</h1>
    </header>

    <?php 
        // boucle for
        for ($nombre = 1 ; $nombre <= 10 ; $nombre++) {
            echo("<br> nombre: $nombre");
        }

        // boucle foreach : tableaux
        $clients = [
            "ref1" => [
                "nom" => "Albert",
                "prenom" => "Einstein"
            ],
            "ref2" => [
                "nom" => "Jules",
                "prenom" => "César"
            ],
            "ref3" => [
                "nom" => "Victor",
                "prenom" => "Hugo"
            ]
            ];
   
            echo("<br> taille tableau clients : ".sizeof($clients));

        foreach ($clients as $ref => $client) {
            echo("<br> -------------------------------------------");
            echo("<br> reference client : $ref");
            echo("<br> ".$client["nom"]." ".$client["prenom"]);
        }



    ?>

</body>

</html>