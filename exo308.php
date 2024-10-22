<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 308: PHP Nouvelle Techno : Conditions et opérateurs</h1>
    </header>

    <?php 
        // on pose une question
        $reponse = true;
        if($reponse){
            echo "Bravo";
        }
        else {
            echo "Pas bien";
        }

        // Switch classique
        $animal="chat";

        switch($animal){
            case "chat":
                echo "<br>miaou";
                break;
            case "chien":
                echo "<br>woof";
                break;
            }

        // Switch combiné
        $a=1;
        $b=1;

        echo("<br> a: $a");
        echo("<br> b: $b");

        switch($a <=> $b){
            case -1:
                echo "<br> a < b";
                break;
            case 0:
                echo "<br> a = b";
                break;
            case 1:
                echo "<br> a > b";
                break;
            }

    ?>

</body>

</html>