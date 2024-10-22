<?php 
// on utilise la variable super globale SESSION 
// pour démarrer la session php qui créé un cookie PHPSESSID
session_start();

// si la personne est déjà connectée on redirige vers la page profil
if (isset($_SESSION["user"])){
    header("Location: ./exo311-profil_user.php");
    exit;
}

    // on verifier si le formulaire a été envoyé
    if(!empty($_POST)){
        // le formulaire a été envoyé
        // On vérifie que tous les champs existent et ne sont pas vides
        if(isset($_POST["email"], $_POST["pass"])
        && !empty($_POST["email"])
        && !empty($_POST["pass"])){
            // on vérifie que le email en est un
            if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                die("ce n'est pas un email");
            }

            // on se connecte à la base de données
            require_once "./exo311-connect_db.php";

            // on ne passe jamais directement les paramètres venant de l'utilisateur
            $sql = "SELECT * from `users` WHERE `email` = :email";
            $query = $db->prepare($sql);
            $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
            $query->execute();
            $user = $query->fetch();
            
           if (!$user){
            die("L'utilisateur et/ou le mot de passe incorrect ");
           }
           if(!password_verify($_POST["pass"],$user["password"])){
            die("L'utilisateur et/ou le mot de passe incorrect ");
           };

           // L'utilisateur et le mot de passe sont corrects
           // on va pouvoir connecter l'utilisateur (ouvrir la session)

           
           // on stocke dans $_SESSION les informations de l'utilisateur
           $_SESSION["user"]=[
            "id" => $user["id"],
            "username" => $user["username"],
            "email" => $user["email"],
            "role" => $user["role"]
           ];

        // on peut rediriger vers la page de profil (par exemple)
        header("Location: ./exo311-profil_user.php");
        }
}

    // On inclus le header
    include_once "./exo311-header.php";

    // On inclus la navbar
    include_once "./exo311-navbar.php";
?>

<h1>Connection</h1>

<form method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass">
    </div>
    <button type="submit">Me connecter</button>
</form>


<?php 

    // On inclus le heafooter
    include_once "./exo311-footer.php";


?>