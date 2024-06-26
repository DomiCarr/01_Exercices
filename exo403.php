<?php
echo '<br> une simple chaîne de caractères', "\n" ;
echo '<br> et maintenant avec l\'apostrophe !',"\n" ;
echo <<<'MON_DELEMITEUR'
<br> voici le début du texte
qui peut aller sur plusieurs lignes
et contenir des caractères spéciaux
comme l'apostrophe et la barre oblique inverse \
MON_DELEMITEUR;

$quantite = 12 ; # on affecte la valeur 12 à la variable $quantite
echo "\n <br> Cette boîte contient {$quantite} oeufs.\n" ;
echo "<br>  une\ttabulation" ; # le caractère spécial "\t" est une tabulation
echo <<<mon_identifiant_de_chaine
<br>  \n une chaîne avec\ndes\nlignes\nmultiples
ainsi que des variables interprétées :
{$quantite}
mon_identifiant_de_chaine;
?>