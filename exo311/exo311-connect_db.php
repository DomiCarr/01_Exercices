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
        // echo "<br> On est connecté";

    }   catch (PDOException $e) {
        die("Erreur: ".$e->getMessage());
    }

?>