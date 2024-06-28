<?php
echo "<br> -----------------------------------------------------------";
echo "<br> =>   Fonction / Arguments";
echo "<br> -----------------------------------------------------------";
echo "<br>";

function sayHello($firstName, $lastName) 
{
	echo "Bonjour " , $firstName , " " , $lastName , "!";
}
sayHello("John", "Doe");

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Fonction / Arguments: Nombre arguments indéfini";
echo "<br> -----------------------------------------------------------";
echo "<br>";

function sayHello2(...$persons) {
	foreach($persons as $person) {
		echo "<br> Bonjour " . $person . "!\n";
  }
}
sayHello2("Agnès", "Kenza", "Nour");

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Fonction / Arguments: Valeur par défaut";
echo "<br> -----------------------------------------------------------";
echo "<br>";
# Dans cet exemple, l’application saluera l’utilisateur 
# par un “Bonjour illustre inconnu!”, car aucun nom n’a été passé en argument. 
# C’est donc la valeur par défaut qui a été utilisée.

function sayHello3($name = "illustre inconnu") {
	echo "Bonjour " . $name . "!";
}
sayHello3();

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Fonction / Arguments ";
echo "<br> -----------------------------------------------------------";
echo "<br>";


$name = "hector";
function sayHello4($name) {
	$name = ucfirst($name);
	echo "<br> Bonjour " . $name . "!";
}
sayHello4($name);
echo "<br> ", $name;

echo "<br> -----------------------------------------------------------";
echo "<br> =>   Fonction / Valeur de retour ";
echo "<br> -----------------------------------------------------------";
echo "<br>";


function isOver18($age) {
    if($age < 18) {
       return false;	
    } return true;
}
$result = isOver18(17);
echo "<br> age 17: ", $result;

$result = isOver18(19);
echo "<br> age 19: ", $result;


?>