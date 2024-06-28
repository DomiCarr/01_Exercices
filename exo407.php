<?php
echo "<br> -------------------------------";
echo "<br> Tableaux: ";
echo "<br> -------------------------------";

$tab_num = [5,4,3,2,1];
echo "<br> tab_num";
print_r($tab_num);
$count_tab = count($tab_num);
echo "<br> ". $count_tab . " elements dans tab_num";


$tab_num2 =array (5,4,3,2,1);
echo "<br> tab_num";
print_r($tab_num2);

$doubles = array_map(function($element) { return $element * 2; }, $tab_num);
$doubles2 = array_map(fn($element) => $element * 2, $tab_num);

echo "<br> double:";
print_r($doubles);
echo "<br> double2: ";
print_r($doubles2);


echo "<br> -------------------------------";
echo "<br> Tableau countries: ";
echo "<br> -------------------------------";

$countries = ['Argentine', 'Belgique', 'Chili', 'Equateur'];
echo "<br> ",$countries[1]; 
foreach($countries as $key => $countries) {
    echo "<br> ",$countries," clé: ", $key; 
}

echo "<br> -------------------------------";
echo "<br> Tableau isocode: ";
echo "<br> -------------------------------";
$isoCode = [
    'Argentine' => 'AR',
    'Belgique' => 'BE',
        'Chili' => 'CL',
        'Equateur' => 'EC'
    ];
echo "<br> ",$isoCode['Argentine']; 
foreach($isoCode as $key => $isoCode) {
    echo "<br> ",$isoCode," clé: ", $key;   
}

echo "<br> -------------------------------";
echo "<br> Tableau pays: ";
echo "<br> -------------------------------";

$pays = [
    'Europe' => ['France', 'Espagne','Italie'],
    'Ameriques' => ['Brésil', 'Etats-Unis','Argentine'],
    'Asie' => ['Chine', 'Inde'],
    'Afrique' => ['Algérie', 'Maroc','Congo']
];

print_r($pays);

echo "<br> -------------------------------";
echo "<br> Ajout d'un élément: ";
echo "<br> -------------------------------";

$noms = ['Marcel','Bob','Julie'];
echo "<br> noms: ";
print_r($noms);

$noms[] = 'Eric';
echo "<br> noms: ";
print_r($noms);

$noms[3] = 'Bob';
echo "<br> noms: ";
print_r($noms);

echo "<br> -------------------------------";
echo "<br> Manipulation de tableau: ";
echo "<br> -------------------------------";

# Fonction avec un callback qui ajoute 1 à chaque élément du tableau 
$grades = [2,8,12,6,9,12,13,5];

echo "<br>";
print_r($grades);
#fonction qui ajoute 1
function addone($grade) { return $grade+1 ; }
# Appel de la fonction avec le callback
$gradesP = array_map('addone',$grades);

echo "<br>";
print_r($gradesP);

# Fonction avec callback qui filtre les éléments inférieurs à 10
function filtre($grade) { return $grade < 10 ; }
# Appel de la fonction avec le callback 
$gradesF = array_filter($grades, 'filtre');

echo "<br>";
print_r($gradesF);

?>