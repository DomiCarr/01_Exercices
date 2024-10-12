<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 306: PHP Nouvelle Techno : Formulaire GET </h1>
    </header>

    <form method="get">
        <div>
            <label for="nombre1">Nombre 1 :</label>
            <input type="number" id="nombre1" name="nb1">
        </div>
        <div>
            <label for="nombre2">Nombre 2 :</label>
            <input type="number" id="nombre2" name="nb2">
        </div>
        <button type="submit">Calculer</button>
    </form>

    <?php 
// http://localhost:3000/exo306.php?nb1=23&nb2=38

    echo "<pre>";
    $total = $_GET["nb1"] + $_GET["nb2"];
    echo "<p>Total : $total</p>";
    echo "</pre>";

    ?>




</body>

</html>