<?php 

echo("<br> -------- var dump de POST");
var_dump($_POST);
echo("<br> -------- -------------");


// On traite le formulaire
if(!empty($_POST)){
    if(
        isset($_POST["title"], $_POST["content"])
        && !empty($_POST["title"])
        && !empty($_POST["content"])
    ) {
        echo("<br> on entre dans la boucle de creation");  
        // Le formulaire est complet
        // on récupère les données en les protégeant (failles XSS)
        // On retire toute la partie balise du title
        $title = strip_tags(($_POST["title"]));
        echo("<br> title $title "); 
        // on neutralise toute balise du contenu
        $content = htmlspecialchars($_POST["content"]);
        echo("<br> content $content "); 

        // on se connecte à la base
        require_once "./exo311-connect_db.php";
        // on écrit la requête 
        $sql = "INSERT INTO `articles`(`title`, `content`) VALUES (:title, :content)";
        echo("<br> sql $sql ");  

        // on prepare la requete
        $query = $db->prepare($sql);

        // on injecte les valeurs 
        $query->bindValue(":title", $title, PDO::PARAM_STR);
        $query->bindValue(":content", $content, PDO::PARAM_STR);

        // on execute la requete
        if(!$query->execute()) {
            die("une erreur est survenue");
        }

        // on recupère l'id de l'article
        $id = $db->lastInsertId();
        die("Article ajouté sous le numéro $id");

    } else {
        die("Le formulaire est incomplet");
    }
    
} else {
}

$section = "Ajouter un article";
// on inclus le header
include_once "./exo311-header.php";
include_once "./exo311-navbar.php";
?>

<!-- On utilise un formulaire en methode POST qui est
 un standard pour mettre à jour une base données 
 cela marche avec le champ name du formulaire -->

<form method="post">
    <div>
        <label for="title">title</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="content">content</label>
        <textarea name="content" id="content"></textarea>
    </div>
    <button type="submit">Enregistrer</button>
</form>


<?php
include_once "./exo311-footer.php";
?>