<?php
echo "<br> -----------------------------------------------------------";
echo "<br> =>   Portée d'une variable  ";
echo "<br> -----------------------------------------------------------";
echo "<br>";

function combien(){ # on définit une fonction "combien"
    $poids = 300 ; # on définit une variable $poids dans la fonction
    echo "<br> poids dans la fonction: ", $poids; # on veut afficher une variable $poids
}
combien(); # on exécute la fonction "combien"
echo "<br> poids en dehors de la fonction : ", $poids; # on veut afficher une variable $poids
echo $poids; # on veut afficher une variable $poids
#, mais il n'existe pas de variable $poids à ce niveau
# donc un message d'erreur est affiché

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Portée d'une variable (2)  ";
echo "<br> -----------------------------------------------------------";
echo "<br>";



function affiche(){ # on définit une fonction "affiche"
    $quantite = 2 ; # on initialise une variable locale $quantite
    echo $quantite,"\n" ; # on affiche cette variable
}
$quantite = 5 ; # on définit une variable globale $quantite
affiche(); # on exécute la fonction "affiche", qui affiche 2
echo $quantite,"\n" ; # on affiche la variable globale $quantite, soit 5

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Portée d'une variable (3)  ";
echo "<br> -----------------------------------------------------------";
echo "<br>";

function affiche_bis(){ # on définit une fonction "affiche_bis"
    global $quantite ; # on déclare utiliser la variable globale $quantite
    $quantite = 2 ; # on modifie cette variable à 2
    echo "<br> global quantité dans la fonction: ",$quantite,"\n" ; # on affiche cette variable
}
$quantite = 5 ; # on définit une variable globale $quantite à 5
echo "<br> global quantité modifié en dehors de la fonction ",$quantite,"\n" ; # on affiche cette variable
affiche_bis(); # on exécute la fonction "affiche_bis"
echo "<br> global quantité modifié dans fonction ",$quantite,"\n" ; # on affiche la variable qui a été modifiée par la fonction

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Formulaire  ";
echo "<br> -----------------------------------------------------------";
echo "<br>";

echo "Sur ce serveur, ce fichier ce nomme {$_SERVER['SCRIPT_NAME']}\n";
echo "<br><br>\n";

if (!$_REQUEST){
    ?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get">
    Votre prénom: <input type="text" name="prenom" value="Antoine" /><br>
    Votre nom: <input type="text" name="nom" value="Legrand" /><br>
    Votre email: <input type="text" name="email" value="a.legrand@google.com" /><br>
    <input type="submit" value="Envoyer">
</form>
<?php
}
else {
    echo "votre prénom est {$_REQUEST['prenom']}<br>";
    echo "votre nom est {$_REQUEST['nom']}<br>";
    echo "votre email est {$_REQUEST['email']}<br>";
}


echo "<br> -----------------------------------------------------------";
echo "<br> =>   Variables dynamiques ";
echo "<br> -----------------------------------------------------------";
echo "<br>";


# on définit une variable $texte qui vaut 'chaine'
$texte = 'chaine' ; 
# on définit une variable $chaine
$chaine = 'de caractères' ; 
# on affiche la variable $texte
echo "<br> texte: ", $texte,"\n" ; 
# on affiche la variable $chaine
ECHO "<br> chaine: ", $chaine,"\n" ;
echo "<br> --";

# on affiche la variable dont le nom est la valeur de $texte

echo "<br> la valeur de texte: ", $$texte,"\n" ; 
echo "<br> --";

# on définit une variable $document qui vaut 'texte'
$document = 'texte' ; 
echo "<br> on affiche l'interprétation finale de document->texte->chaine->de caractères: ";
# on affiche l'interprétation finale de document->texte->chaine->de caractères
echo $$$document,"\n" ; 

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Variables dynamiques (2) ";
echo "<br> -----------------------------------------------------------";
echo "<br>";

$document = 'texte' ; # on définit une variable $document qui vaut 'texte'
$texte = 'chaine' ; # on définit une variable $texte qui vaut 'chaine'
$chaine = 'lien' ; # on définit une variable $chaine qui vaut 'lien'
echo "<br>";
echo "$document\n" ; # affiche la valeur de la variable $document, soit 'texte'
echo "<br>";
echo "$$document\n" ; # affiche le symbole $ suivi de la valeur de la variable $document, soit 'texte'
echo "<br>";
echo "$$$document\n" ; # affiche 2 symboles $ suivis de la valeur de la variable $document, soit 'texte'
echo "<br>";
echo "${$document}\n" ; # affiche la valeur de la variable dont le nom est $texte, soit 'chaine'
echo "<br>";
echo "${${$document}}\n" ; # affiche la valeur de la variable dont le nom est $chaine, soit 'lien'
$donnees = ['phrase','mots','lettres']; # on définit un tableau de données
$phrase = 'mots'; # on définit une variable nommée $phrase et qui vaut 'mots'
$mots = 'lettres'; # on définit une variable nommée $mots et qui vaut 'lettres'
echo "<br>";
echo "une $donnees[0] contient des {${$donnees[0]}} avec des {${${$donnees[0]}}}";
# affiche 'une phrase contient des mots avec des lettres'

echo "<br> -----------------------------------------------------------";
echo "<br> =>   CONSTANTES";
echo "<br> -----------------------------------------------------------";
echo "<br>";

define("MAJORITE",18); # on définit une constante nommée MAJORITE qui vaut 18
echo "<br> Constante MAJORITE: ",MAJORITE,"\n" ; # on affiche cette constante
define("MINIMUM_TEMPERATURE",-20); # on définit une constante MINIMUM_TEMPERATURE
echo "<br> Constante MINIMUM_TEMPERATURE: ",MINIMUM_TEMPERATURE,"\n" ; # on l'affiche

echo "<br> -----------------------------------------------------------";
echo "<br> =>   CONSTANTES PREDEFINIES";
echo "<br> -----------------------------------------------------------";
echo "<br>";

echo "<br> PHP_VERSION: ",PHP_VERSION,"\n" ; # la version de PHP utilisée
echo "<br> PHP_INT_MAX: ",PHP_INT_MAX,"\n"; # le plus grand entier
echo "<br> PHP_FLOAT_MAX: ",PHP_FLOAT_MAX,"\n"; # le plus grand flottant

echo "<br> -----------------------------------------------------------";
echo "<br> =>   CONSTANTES MAGIQUES";
echo "<br> -----------------------------------------------------------";
echo "<br>";

echo "<br> __FILE__ : ", __FILE__,"\n" ; # affiche le nom complet de ce fichier
echo "<br> __LINE__ : ", __LINE__,"\n" ; # affiche le numéro de cette ligne
echo "<br> __DIR__ : ", __DIR__,"\n" ; # affiche 
echo "<br> __CLASS__ : ", __CLASS__,"\n" ; # affiche 
echo "<br> __TRAIT__ : ", __TRAIT__,"\n" ; # affiche 
echo "<br> __METHOD__ : ", __METHOD__,"\n" ; # affiche 
echo "<br> __NAMESPACE__ : ", __NAMESPACE__,"\n" ; # affiche 
function affichage(){ # on définit une fonction nommée 'affichage'
    echo "<br> __FUNCTION__ : ",__FUNCTION__ ; # affiche le nom de la fonction en cours
}
affichage(); # exécute cette fonction 'affichage'

?>