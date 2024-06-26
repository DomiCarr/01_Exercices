<?php
echo "tableau  [4,5.3,-8,\"programmation\",true]; # un tableau de 5 éléments sans clé explicite";
$tableau = [4,5.3,-8,"programmation",true]; # un tableau de 5 éléments sans clé explicite

echo "<br> tableau[0] le premier élément du tableau, à l'indice 0, affiche : ";
echo $tableau[0],"\n"; # le premier élément du tableau, à l'indice 0, affiche 4

echo "<br> echo tableau[3] le quatrième élément du tableau, à l'indice 3, affiche : ";
echo $tableau[3],"\n"; # le quatrième élément du tableau, à l'indice 3, affiche programmation

echo "<br> tableau[3] = \"PHP\" ; # met à jour la valeur du quatrième élément du tableau, à l'indice 3";
$tableau[3] = "PHP" ; # met à jour la valeur du quatrième élément du tableau, à l'indice 3

echo "<br> tableau[3] le quatrième élément du tableau, à l'indice 3, affiche: ";
echo $tableau[3],"\n"; # le quatrième élément du tableau, à l'indice 3, affiche PHP

echo "<br>  tableau[] = new ! ajoute un élément en fin de tableau avec la valeur indiquée";
$tableau[] = "new !"; # ajoute un élément en fin de tableau avec la valeur indiquée

echo "<br>  print_r(tableau); # affiche tout le contenu du tableau ; remarquez le dernier élément ajouté";
print_r($tableau); # affiche tout le contenu du tableau ; remarquez le dernier élément ajouté

# un tableau avec clés explicites
$famille = [
    "père"=>"jean",
    "mère"=>"marie",
    "grand-père_p"=>"antoine",
    "grand-mère_p"=>"alice",
    "grand-père_m"=>"franck",
    "grand_mère_m"=>"sarah"
];
echo "<br>famille[père]: ",$famille["père"],"\n" ; # la valeur de l'élément du tableau dont la clé est "père"
echo "<br> famille[mère]: ",$famille["mère"],"\n" ; # la valeur de l'élément du tableau dont la clé est "mère"

# un tableau dont les valeurs sont des tableaux
$famille_bis = array(
    "père"=>"jean",
    "mère"=>"marie",
    "grand-père"=>array(
        "paternel"=>"antoine",
        "maternel"=>"franck"),
    "grand-mère"=>array(
        "paternel"=>"alice",
        "maternel"=>"sarah")
);
echo "<br> print_r affiche tout le contenu du tableau: <br>";
print_r($famille_bis); # affiche tout le contenu du tableau

echo "<br> -----------------------------";
echo "<br> ---  OBJETS  ----------------";
echo "<br> -----------------------------";
echo "<br>";

# on définit notre modèle de Livre avec nos 3 propriétés
class Livre{
    public $titre;
    public $auteur;
    public $parution;
}
# on crée une instance de Livre, puis on renseigne ses propriétés
$livre1 = new Livre();
$livre1->titre = "Voyage au Centre de la Terre"; # on renseigne le titre
$livre1->auteur = "Jules Vernes"; # on renseigne l’auteur
$livre1->parution = 1864 ; # on indique l’année
print_r($livre1); # on affiche le contenu de l’instance

echo "<br>";

# on définit une nouvelle classe qui contient un constructeur
class Livre2{
    public $titre;
    public $auteur;
    public $parution;
    function __construct($t, $a, $p){
        $this->titre = $t;
        $this->auteur = $a;
        $this->parution = $p;
    }
}
# à la création de l’objet, on passe au constructeur les valeurs des propriétés
$livre2 = new Livre2("De la Terre à la Lune","Jules Vernes",1865);
print_r($livre2); # on affiche l’objet




?>