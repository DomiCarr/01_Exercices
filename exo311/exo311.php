<?php 

// on utilise la variable super globale SESSION 
// pour démarrer la session php qui créé un cookie PHPSESSID
session_start();

    // on definit le nom de la section qui peut changer suivant les pages
    //$section = "Nom de la section";

    // On inclus le fichier des fonctions
    require_once "./exo311-functions.php";

    // On inclus le header
    include_once "./exo311-header.php";

    // On inclus la navbar
    include_once "./exo311-navbar.php";
?>

<p>Contenu de la page</p>

<?php 

    // connection à la bade données
    require_once "./exo311-connect_db.php";

    // on suppose que les données sont issues d'un formulaire
    $username = "Hug323";
    $password = "toto";

    // Example injection SQL :
    // $password = "VH' OR 1=1; --";

    $sql = "SELECT * FROM `USERS` WHERE `username`=:username AND `password`=:password";

    // on va préparer la requête
    $requete = $db->prepare($sql);

    // On injecte les valeurs avec bindValue ou bindParam
    // avec bidParam on peut modifier la valeur après le bind 
    // tant que la requete n'a pas été exécutée
    $requete->bindValue(":username", $username, PDO::PARAM_STR);
    $requete->bindParam(":password", $password, PDO::PARAM_STR);

    $password = "VH";

    // on execute la requete
    $requete->execute();


    $user = $requete->fetchAll();

       
    var_dump($user);

    // appel de la fonction
    veriForm();
    
    // On inclus le heafooter
    include_once "./exo311-footer.php";


?>