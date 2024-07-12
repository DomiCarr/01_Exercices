<form action="./exo415/exo415_form.php" method="POST">
    <label for="email">Adresse email :</label>
    <input type="mail" id="email" name="email" required>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Envoyer">
</form>

<form action="./exo415/exo415_upload.php" method="post" enctype="multipart/form-data">
    <label for="image">Choisir une image :</label>
    <input type="file" name="photo" id="image">
    <button type="submit" name="submit">Envoyer</button>
</form>