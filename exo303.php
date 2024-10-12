<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 303: PHP Nouvelle Techno : chaines </h1>
    </header>
    <?php   
     $chaine = "Ceci est une chaîne de caractères";
     echo ("<br> chaine: $chaine" );     

     // afficher un caractère de la chaine
     echo ("<br> chaine[3]: $chaine[3]" );

     // modifier un caractère de la chaine
     $chaine[0] = "F";
     echo ("<br> chaine: $chaine" );     

     // Extraire une partie de la chaine
     echo ("<br> chaine (13,7) : ". substr($chaine,12,7));
     echo ("<br> chaine (-10) : ". substr($chaine,-10));

     // remplacer une partie de la chaine en respectant la casse
     $chaine = str_replace('Feci','Cela',$chaine);
     echo ("<br> chaine: $chaine" );         

    // remplacer une partie de la chaine sans respecter la classe
    $chaine = str_ireplace('cela','Ceci',$chaine);
    echo ("<br> chaine: $chaine" );

    // verifier si une chaine contient une autre
    echo("<br> recherche brouette: ");
    var_dump(str_contains($chaine,'brouette'));
    echo("<br> recherche est: ");
    var_dump(str_contains($chaine,'est'));

    // verifier si une chaine commence par une autre
    echo("<br> commence par brouette: ");
    var_dump(str_starts_with($chaine,'Brouette'));
    echo("<br> commence par Ceci: ");
    var_dump(str_starts_with($chaine,'Ceci'));

    
    // verifier si une chaine fini par une autre
    echo("<br> commence par brouette: ");
    var_dump(str_ends_with($chaine,'Brouette'));
    echo("<br> commence par caractères: ");
    var_dump(str_ends_with($chaine,'caractères'));

    // trim supprime les espaces en début ou fin de chaine
    $chaine2 = "   chaine    ";
    echo("<br> chaine2 : ");
    var_dump($chaine2);      
    echo("<br> chaine2 sans les espaces avant et après: ");
    var_dump(trim($chaine2));    

     ?>
</body>

</html>