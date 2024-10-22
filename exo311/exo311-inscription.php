<?php 
// on utilise la variable super globale SESSION 
// pour démarrer la session php qui créé un cookie PHPSESSID
session_start();

// si la personne est déjà connectée on redirige vers la page profil
if (isset($_SESSION["user"])){
    header("Location: ./exo311-profil_user.php");
    exit;
}

// On met la redirection en tout premier avant tout code HTML 
// sinon cela ne marche pas

    // on verifier si le formulaire a été envoyé
    if(!empty($_POST)){
        // le formulaire a été envoyé
        // On vérifie que tous les champs existent et ne sont pas vides
        if(isset($_POST["username"], $_POST["email"], $_POST["pass"])
        && !empty($_POST["username"])
        && !empty($_POST["email"])
        && !empty($_POST["pass"])){
            // le formulaire est complet
            // on récupère les données en les protégeant
            $username = strip_tags($_POST["username"]);

            // on vérifie que l'email est valide
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                die ("L'adresse email est incorrecte'");
            }
            // on va hasher le mot de passe
            $pass = password_hash($_POST["pass"],PASSWORD_BCRYPT);

            // Ajouter ici les controles souhaités
            // pseudo et email n'existent pas deja
            // verif que les 2 mots de passe sont identiques
            // verif que les 2 emails sont identiques
            // verif de la force du mot de passe
            
            // on se connecte à la base de données
            require_once "./exo311-connect_db.php";

            // on ne passe jamais directement les paramètres venant de l'utilisateur
            $sql = "INSERT INTO `users`(`username`,`email`,`password`,`role`)
            VALUES  (:username, :email, '$pass', '[\"ROLE_USER\"]')";

            // prepration et execution de la requete
            $query = $db->prepare($sql);
            $query->bindValue(":username",$username, PDO::PARAM_STR);
            $query->bindValue(":email",$_POST["email"], PDO::PARAM_STR);
            $query->execute();

           // on connecte l'utilisateur
           // on va pouvoir connecter l'utilisateur (ouvrir la session)

           // on récupère l'id de l'utilisateur
           $id = $db->lastInsertId();

           // on stocke dans $_SESSION les informations de l'utilisateur
           // on décide ce qu'on met dedans
           $_SESSION["user"]=[
            "id" => $id,
            "username" => $username,
            "email" => $_POST["email"],
            "role" => $user["ROLE_USER"]
           ];

        // on peut rediriger vers la page de profil (par exemple)

        header("Location: exo311-profil_user.php");

        } else {
        // le formulaire n'est pas complet
        die ("Le formulaire est incomplet");
        }
        }


    // On inclus le header
    include_once "./exo311-header.php";

    // On inclus la navbar
    include_once "./exo311-navbar.php";
?>

<h1>Inscription</h1>

<form method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass">
    </div>
    <button type="submit">M'inscrire</button>
</form>



<?php 

    // On inclus le heafooter
    include_once "./exo311-footer.php";


?>