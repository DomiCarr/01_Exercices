<?php

echo "<br> --------------------------------------";
echo "<br> incrémentation et décrémentation:     ";
echo "<br> --------------------------------------";

$compteur = 10;
echo "<br> \$compteur = ",$compteur;
echo "<br> ++\$compteur = ", ++$compteur;
echo "<br> --\$compteur = ", --$compteur;
echo "<br> \$compteur++ = ", $compteur++, " puis ","\$compteur = ", $compteur;

echo "<br> --------------------------------------";
echo "<br> parcourir un tableau:     ";
echo "<br> --------------------------------------";

$tableau = [3,8,'toto',15,38,1];
foreach ($tableau as $pos => $val) {
    echo "<br> ", $val;
}

$quantite = 500;
$gorgee = 50;

echo "<br> --------------------------------------";
echo "<br> Boucle while     ";
echo "<br> --------------------------------------";

while ($quantite > 0){
    echo "<br> Il reste ", $quantite, " Et hop, une petite gorgée";
    $quantite -= $gorgee;
}

echo "<br> La bière est vide, allons au magasin";

echo "<br> --------------------------------------";
echo "<br> Break     ";
echo "<br> --------------------------------------";

for($a=1 ; $a<=10 ; $a++){ # on prévoit 10 itérations à l'aide de la variable $a
	$d = 10 ; # on initialise une variable $d
    if ($a>=$d) {break 1;}
	do {
		echo "<br> ", $d,'-',$a,' = ',$d-$a,"\n" ; # on affiche la soustraction de $d par $a
		$d-- ; # on décrémente $d
	} while($d>$a) ; # on répète cette boucle tant que $d est supérieur à $a
echo "<br> -----------------\n" ; # on affiche une ligne de séparation
}

echo "<br> --------------------------------------";
echo "<br> Break (suite)    ";
echo "<br> --------------------------------------";

for($a=1 ; $a<=10 ; $a++){ # on prévoit 10 itérations à l'aide de la variable $a
	for($d=10 ; $d>$a ; $d--){ # on boucle avec une variable $d
		# on répète cette boucle tant que $d est supérieur à $a
		if($d<5){
			continue 2; # on passe à l'itération suivante de la boucle intérieure quand $d est inférieur à 5
			# on continue donc la boucle extérieure et affiche la ligne de séparation
		}
		echo "<br> ",$d,'-',$a,' = ',$d-$a,"\n" ; # on affiche la soustraction de $d par $a
	}
	echo "<br>-----------------\n" ; # on affiche une ligne de séparation
}

#		echo "<br> ",$d,'-',$a,' = ',$d-$a,"\n" ; # on affiche la soustraction de $d par $a
#	echo "<br>-----------------\n" ; # on affiche une ligne de séparation

?>