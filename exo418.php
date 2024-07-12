<html>

<head>
    <title>La manipulation des dates PHP</title>
</head>

<body>
    <?php 
      $date1 = '2023-04-30';
      echo "<br> date1: " . $date1;
      $date2 = '2023-05-10';
      echo "<br> date2: " . $date2;
      $solde = 10; // déclaration et initialisation de la variable $solde
      echo "<br> solde: " . $solde;

      
      $datestart = date_create($date1); //get current server time
      $dateend = date_create($date2);//some future date
      $diff = date_diff($datestart, $dateend);
      echo "<br> date_diff: " . $date_diff;

      function isholiday($timestamp) {
        $jour = date("d", $timestamp);
        $mois = date("m", $timestamp);
        $annee = date("Y", $timestamp);
        $EstFerie = 0;
        // dates fériées fixes
        if($jour == 1 && $mois == 1) $EstFerie = 1; // 1er janvier
        if($jour == 1 && $mois == 5) $EstFerie = 1; // 1er mai
        if($jour == 8 && $mois == 5) $EstFerie = 1; // 8 mai
        if($jour == 14 && $mois == 7) $EstFerie = 1; // 14 juillet
        if($jour == 15 && $mois == 8) $EstFerie = 1; // 15 aout
        if($jour == 1 && $mois == 11) $EstFerie = 1; // 1 novembre
        if($jour == 11 && $mois == 11) $EstFerie = 1; // 11 novembre
        if($jour == 25 && $mois == 12) $EstFerie = 1; // 25 décembre
        return $EstFerie;
      }
      $nbdiff = intval($diff->format("%d"));
      echo "<br> nbdiff: " . $nbdiff;

      $conge=0;
      for($i=0;$i<=$nbdiff;$i++){           
        $newdate = date('Y-m-d', strtotime($date1. ' + '.$i.' days'));
        echo"<br> newdate: ".$newdate;
        $weekendday = date('w', strtotime($newdate));
        echo"<br> weekenday: ".$weekendday;
        echo"<br> isoholiday: ".isholiday(strtotime($date1. ' + '.$i.' days'));
        if ($weekendday == 0 || $weekendday == 6 || isholiday(strtotime($date1. ' + '.$i.' days'))==1) {
        } else {
          $conge++;
        }
        echo"<br> conges------------> ".$conge;
          }
      echo "<br> Nombre de jour de congés : ".$conge;
      if($conge>$solde){
        $diff=$conge-$solde;
        echo "<br> Congé refusé : solde insuffisant, il manque encore ".$diff." jour(s) de solde";
      } else {
        echo "<br> Congé accepté";
      }


      function reduction($productname, $date, $price)
      {
      $today = date("Y-m-d"); // Date actuelle
      $datestart = date_create($today);
      $dateend = date_create($date);
      $diff = date_diff($datestart, $dateend);
      $daydiff = intval($diff->format("%r%a")); // Utiliser %r pour conserver le signe (positif/négatif)
      if ($daydiff <= 5 && $daydiff >= 0) {
      // Réduction de 10% par jour pour les 5 derniers jours
      $reductionPercent = 10 * $daydiff;
      $newprice = $price - ($price * $reductionPercent / 100);
      } elseif ($daydiff < 0) {
      // Le produit est périmé, réduction de 50%
      $newprice = $price / 2;
      } else {
      // Le produit n'est pas encore éligible à la réduction
      $newprice = $price;
      }
      echo "Nom du produit : " . $productname . "<br>";
      echo "Prix en promotion : " . $newprice . "€<br>";
      }
      
    ?>
</body>

</html>