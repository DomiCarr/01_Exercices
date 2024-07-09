<?php
declare(strict_types=1);

echo "<br> --------------------------------------";
echo "<br> Créer ses propres fonctions:     ";
echo "<br> --------------------------------------";

echo "<br> --------------------------------------";
echo "<br> declare(strict_types=1) permet de passer en mode strict     ";
echo "<br> --------------------------------------";



/**
*Retourne une chaîne de caractères qui salue une personne et lui indique l'heure *courante
*
*<Une description éventuellement plus détaillée de ce que la fonction fait, sur *plusieurs lignes>
*
* @param string $firstName Le prénom de la personne à saluer 
* @param string $lastName Le nom de famille de la personne à saluer 
* @link https://www.php.net/manual/fr/function.date.php
*
* @return string
*
*/
function sayHi(string $firstName, string $lastName): string 
{  	$currentTime = date('H:i'); 
	return "<br> Bonjour " . $firstName . $lastName . " ! Il est : " . $currentTime ;  } 
//Appel de la fonction sayHi (le corps de la fonction sayHi est éxecuté) 
$message = sayHi('TheDoms', '31'); 
echo $message;


echo "<br> --------------------------------------";
echo "<br> Nombre d'arguments non défini :     ";
echo "<br> --------------------------------------";
echo "<br>";


function foo(int ...$args): void
{
	//print_r permet d'afficher le contenu d'un tableau sur la sortie standard
	print_r($args);
}
foo(1,2,3,4,5);

echo "<br> --------------------------------------";
echo "<br> Une fonction qui prend une fonction en argument :     ";
echo "<br> --------------------------------------";
echo "<br>";

//Une fonction qui prend une fonction en argument
function sum(array $array, callable $operation){
	$sum = 0;
	foreach ($array as $item) {
		//Application de la fonction $operation à chaque item
		$sum += $operation($item);
	}
	return $sum;
}
//On stocke notre fonction dans une variable
$square = function($item)
{
	return $item  * $item;
};
//On passe la variable qui contient notre fonction à sum. Affiche 14
echo "<br>";
echo sum(array(1,2,3), $square);
//On peut se resservir de $square pour faire un autre calcul
echo "<br>";
echo sum(array(4,5,6), $square);

echo "<br> --------------------------------------";
echo "<br> Exercice 01 :     ";
echo "<br> --------------------------------------";
echo "<br>";

/**
* Retourne tous les tokens (chaîne de caractères)
* se trouvant à l’intérieur d'un tag, tags exclus
* @param string $string La chaîne de caractères à analyser
* @param string $openingTag chaîne de caractères ouvrante du tag
* @param string $closingTag chaîne de caractères fermante du tag
* @return array La liste des tokens trouvés
*/
function findTokens(string $string, string $openingTag, string $closingTag): array
{
	$openingTagPosition = strpos($string, $openingTag);
	//S'il n'y a pas de balise ouvrante, on retourne une liste vide
	if ($openingTagPosition === false)
		return array();
	$tokens = array();
	//Solution itérative (boucle + variables d'état $tokens et 	$openingTagPosition mises à jour)
	while ($openingTagPosition !== false) {
		$closingTagPosition = strpos($string, $closingTag, $openingTagPosition + strlen($openingTag));
		$tokenLength = $closingTagPosition - ($openingTagPosition + strlen($openingTag));
		$token = substr($string, $openingTagPosition + strlen($openingTag), $tokenLength);
		$tokens[] = $token;
		$openingTagPosition = strpos($string, $openingTag, $closingTagPosition + strlen($openingTag));
	}
	return $tokens;
}
//Test
$abstract = 'Git is a fast, *scalable*, distributed revision control system with an unusually rich command set that provides both high-level operations and full access to internals. Git is an *Open Source project* covered by the *GNU General Public License* version 2 (some parts of it are under different licenses, compatible with the GPLv2). It was originally written by *Linus Torvalds* with help of a group of *hackers* around the net.';
print_r(findTokens($abstract, '*', '*'));

echo "<br> --------------------------------------";
echo "<br> Exercice 02 :     ";
echo "<br> --------------------------------------";
echo "<br>";

/**
* Retourne le nombre de tokens compris dans les balises ouvrante et fermante
* @param string $openingTag chaîne de caractères ouvrante du tag
* @param string $closingTag chaîne de caractères fermante du ta
* @return int Le nombre de tokens trouvés
*/
function countTokensBetweenTags(string $string, string $openingTag, string $closingTag): int
{
// Condition d'arrêt: longueur de la chaîne à analyser est égale à 0
	if (strlen($string) === 0)
		return 0;
	$openingTagPosition = strpos($string, $openingTag);
	$closingTagPosition = strpos($string, $closingTag, $openingTagPosition + strlen($openingTag));
	//Condition d'arrêt: absence de balise ouvrante ou absence de balise fermante (input mal formée)
	if ($openingTagPosition === false || $closingTagPosition === false)
	return 0;
	$offset = $closingTagPosition + strlen($closingTag);
	//On extrait la chaîne restante, située après la dernière balise fermante: problème plus petit
	$substr = substr($string, $offset);
	//On appelle la fonction de manière récursive sur le problème plus petit
	return 1 + countTokensBetweenTags($substr, $openingTag, $closingTag);
}
echo "Question 2: test" . PHP_EOL;
echo countTokensBetweenTags($abstract, '*', '*') . PHP_EOL;



?>