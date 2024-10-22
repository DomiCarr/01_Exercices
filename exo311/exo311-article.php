<?php 
// on utilise la variable super globale SESSION 
// pour démarrer la session php qui créé un cookie PHPSESSID
session_start();

        // on vérifie si on a un id
        if(!isset($_GET["id"]) || empty($_GET["id"])) {
        // je rn'ai pas d'id
        header("location: exo311-articles.php");
        exit;
        }

    // je récupère l'id
    $id = $_GET["id"];

    // connection à la bade données
    require_once "./exo311-connect_db.php"; 

    // on va aller chercher l'article dans la base
    // on écrit la requête
    $sql = "SELECT * from `articles` WHERE `id` = :id";
        
    // on prepare la requete 
    $requete = $db->prepare($sql);

    // on injecte les paramètresquête
    $requete->bindValue(":id", $id, PDO::PARAM_INT);
        
    // on execute la requête
    $requete->execute();
    
    // on récupère les données
    $article = $requete->fetch();

    // on vérifie si article est vide
    if (!$article){
        http_response_code(404);
        echo "Article inexistant";
        exit;
    }

    // on definit le nom de la section qui peut changer suivant les pages
    $section = strip_tags($article["title"]);

    // On inclus le fichier des fonctions
    require_once "./exo311-functions.php";

    // On inclus le header
    include_once "./exo311-header.php";

    // On inclus la navbar
    include_once "./exo311-navbar.php";
?>

<section>
    <article>
        <!-- strip tags permet de protéger au moment de 'affichage au cas ou base 
         corrumpue par un script inséré dans un champ -->
        <h2><?= strip_tags($article["title"]) ?></h2>
        <div><?= strip_tags($article["content"]) ?></div>
        <p>Publié le: <?= $article["created_at"] ?></p>
    </article>

</section>

<?php
// On inclus le heafooter
include_once "./exo311-footer.php";


?>