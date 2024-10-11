<!DOCTYPE html>
<html>

<head>
    <title>Formulaire de commande</title>
</head>

<body>
    <h1>Formulaire de commande</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="adresse">Adresse :</label>
        <textarea name="adresse" id="adresse" required></textarea><br><br>
        <label for="produit">Produit :</label>
        <input type="text" name="produit" id="produit" required><br><br>
        <label for="prix">Prix :</label>
        <input type="number" name="prix" id="prix" required><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>


<?php
    If ($_SERVER['REQUEST_METHOD'] == 'POST') {
    If (isset($_POST['nom'])) {
    $nom_client = $_POST['nom'];
    $adresse_client = $_POST['adresse'];
    $produit_commande = $_POST['produit'];
    $prix_commande = $_POST['prix'];    
    $file = fopen('./files/commandes.txt', 'a');    
    fwrite($file, "$nom_client, $adresse_client, $produit_commande, $prix_commande\n");
    fclose($file);    
    echo "La commande a été enregistrée avec succès !<br>";   
    if (!is_dir('backup')) {
        mkdir('backup');
    }
    copy('commandes.txt', 'backup/commandes_backup.txt');    
    echo "La commande a été sauvegardée avec succès !";
}
}



    ?>
</body>

</html>