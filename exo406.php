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
?>