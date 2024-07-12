<?php
// Vérifie si les champs ont été soumis
if (isset($_POST['email']) && isset($_POST['password'])) 
{ 
  $email = $_POST['email'];
  $password = $_POST['password'];

// exemple de validation
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
      echo "Adresse mail valide";
      if (strlen($password) <= 7 ) {
        echo "<br> Votre mot de passe doit faire au moins 8 caractères";
      } else {
        echo "<br> Bienvenue " . $email;
      }
	} 
	else 
	{
		echo "Adresse mail invalide";	   
	}
}

echo "<br> \$_FILES: " . var_dump($_FILES);	 

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="image">Choisir une image :</label>
  <input type="file" name="photo" id="image">
  <button type="submit" name="submit">Envoyer</button>
</form>

?>