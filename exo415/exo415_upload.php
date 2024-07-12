<?php
 if (isset($_POST['submit']) && (isset($_FILES['photo'] ))) {
 // récupérer des informations sur notre image
 $image_name = $_FILES['photo']['name']; // nom de notre fichier
 $image_type = $_FILES['photo']['type']; // dossier temporaire
 $image_size = $_FILES['photo']['size']; // dossier temporaire
 $image_tmp_name = $_FILES['photo']['tmp_name']; // dossier temporaire
 $image_error = $_FILES['photo']['error']; // valeur d'erreur de notre image
 
 
 echo"<br> \$image_name: ". $image_name ;
 echo"<br> \$image_type: ". $image_type ;
 echo"<br> \$image_size: ". $image_size ;
 echo"<br> \$image_tmp_name: " . $image_tmp_name;
 echo"<br> \$image_error :" . $image_error;
  
 if($image_error === 0 ) {
 // Enregistrer l'image dans notre dossier uploads
 $destination = "uploads/".$image_name ; // uploads/1.png
 move_uploaded_file($image_tmp_name, $destination);
 echo "<br> L'image a bien été enregistrée";}
 else {
 echo "<br> Il y a eu une erreur lors du téléchargement de l'image";
 }}
 
 
 ?>