<?php 
// on utilise la variable super globale SESSION 
// pour démarrer la session php qui créé un cookie PHPSESSID
session_start();

    // connection à la bade données
    require_once "./exo311-connect_db.php"; 

    // on écrit la requête
    $sql = "SELECT * from `articles` ORDER BY `created_at` DESC";
    
    // on execute la requête
    $requete = $db->query($sql);

    // on récupère les données
    $articles = $requete->fetchAll();

    // on definit le nom de la section qui peut changer suivant les pages
    //$section = "Nom de la section";

    // On inclus le fichier des fonctions
    require_once "./exo311-functions.php";

    // On inclus le header
    include_once "./exo311-header.php";

    // On inclus la navbar
    include_once "./exo311-navbar.php";
?>

<h2>Liste des articles</h2>

<?php foreach($articles as $article): ?>

<section>
    <article>
        <!-- strip tags permet de protéger au moment de 'affichage au cas ou base 
         corrumpue par un script inséré dans un champ -->
        <h2><a href="./exo311-article.php?id=<?= $article["id"] ?>"><?= strip_tags($article["title"]) ?></a></h2>
        <div><?= strip_tags($article["content"]) ?></div>
        <p>Publié le: <?= $article["created_at"] ?></p>
    </article>
    <?php endforeach; ?>

</section>

<?php
// On inclus le heafooter
include_once "./exo311-footer.php";


?>