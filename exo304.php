<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 304: PHP Nouvelle Techno : Nombres </h1>
    </header>
    <?php   
    $nombre1 = 14;
    echo ("<br> nombre1: " );     
    var_dump($nombre1);

    $nombre2 = 85;
    echo ("<br> nombre2: " );     
    var_dump($nombre2);

    // Addition
    $addition = $nombre1 + $nombre2;
    echo ("<br> addiction: " );     
     var_dump($addition);
 
    // Soustracttion
    $soustraction = $nombre1 - $nombre2;
    echo ("<br> soustraction: " );     
     var_dump($soustraction);
 
    // Multiplication
    $multiplication = $nombre1 * $nombre2;
    echo ("<br> multiplication: " );     
     var_dump($multiplication);
 
    // Division
    $division = $nombre1 / $nombre2;
    echo ("<br> division: " );     
     var_dump($division);
 
    // modulo : reste de la division 85 / 14 (1 dans ce cas)
    $modulo = $nombre2 % $nombre1;
    echo ("<br> modulo: " );     
     var_dump($modulo);
 
    // modulo : 9 est§il multiple de 3
    echo ("<br> le modulo de 9/3 est 0 donc 9 est un multiple de 3: " );     
     var_dump(9 % 3);
 
    // Incrémenter : Nombre1 + 1 (attention au ++ qui se fait à la fin de l'instruction)
    $nombre1 = $nombre1 + 1;
    $nombre1 += 1;
    $nombre1 ++;

    // Incrémenter : Nombre1 + 8
    $nombre1 = $nombre1 + 8;
    $nombre1 += 8;

    // Décrémenter : Nombre1 - 1 (attention au ++ qui se fait à la fin de l'instruction)
    $nombre1 = $nombre1 - 1;
    $nombre1 -= 1;
    $nombre1 --;

    // Incrémenter : Nombre1 + 8
    $nombre1 = $nombre1 - 8;
    $nombre1 -= 8;


     ?>
</body>

</html>