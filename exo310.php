<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h1>Exo 310: PHP Nouvelle Techno : PDO et CRUD - MySQL</h1>
    </header>

    <?php 
    // constantes d'environnement
    define("DBHOST","localhost:3100");
    define("DBUSER","root");
    define("DBPASS","");
    define("DBNAME","test");

    // DSN de connection
    $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;
    
    // On va connecter à la base
    try{
        // on instancie le PDO
        $db = new PDO($dsn, DBUSER, DBPASS);

        // On s'assure d'envoyer les données en UTF8
        $db->exec("SET NAMES utf8");

        // On definit le mode fetch par défaut
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        // on est connecté
        echo "On est connecté";

    } catch(PDOException $e) {
        die("Erreur: ".$e->getMessage());
    }

    // Récupération de la liste des utilisateurs
    $sql = "SELECT * FROM USERS";
    echo ("<br> sql: $sql");
    echo ("<br> AVANT dquery");

    $requete = $db->query($sql);
    echo ("<br> APRES dquery");

    // on récupère les données
    $user = $requete->fetchAll();
    echo ("<br> APRES fetch");
    echo "<pre>";
    var_dump($user);
    echo "</pre>";

    // Ajouter un utilisateur
    $sql = "INSERT INTO `USERS` (`id`,`nom`,`prenom`,`annee`) VALUES (NULL,'Foreman','Joseph','1974')";
    $requete = $db->query($sql);
    
    // Modifier un utilisateur
    $sql = "UPDATE `USERS` SET `prenom` = 'Joseph Edgar' WHERE `id` = 9 ";
    $requete = $db->query($sql);
    
    // Supprimer un utilisateur
    $sql = "DELETE FROM `USERS` WHERE `id` > 9 ";
    $requete = $db->query($sql);

    echo ("<br> Nombre lignes: ".$requete->rowCount());    

?>

</body>

</html>