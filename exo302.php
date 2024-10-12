<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 302: PHP Nouvelle Techno : variables</h1>
    </header>
    <?php   
    // On écrit Hello world 
    echo "<p>Hello World !!</p>";
    $nomPersonne = "Benoit";
 
    // l'injection de variable fonctionne uniquement avec les guillemets doubles
    echo "<p>Bonjour $nomPersonne, comment ça va ?</p>";

    // var_dump permet de connaitre le contenu et le type d'une variable
    // int
    $varInt = 85;
    echo "<br> int: $varInt";
    echo "<br> var_dump: ";
    var_dump($varInt);

    // float
    $varFloat = pi();
    echo "<br> float: $varFloat";
    echo "<br> var_dump: ";
    var_dump($varFloat);

    // float
    $varString = "Ceci est un texte";
    echo "<br> string: $varString <br>";
    echo "<br> var_dump: ";
    var_dump($varString);

    // bool
    $varBool = true;
    echo "<br> bool: $varBool";
    echo "<br> var_dump: ";
    var_dump($varBool);

   ?>
</body>

</html>