<?php
echo "un nombre entier écrit dans le système décimal:";
echo 195,"\n" ; # un nombre entier écrit dans le système décimal
echo "<br> 0b101 le nombre entier 101 écrit dans le système binaire correspond à 5 en décimal: ";
echo 0b101,"\n" ; # le nombre entier 101 écrit dans le système binaire correspond à 5 en décimal
echo "<br> 0o764le nombre entier 764 écrit dans le système octal correspond à 500 en décimal";
echo 0o764,"\n" ; # le nombre entier 764 écrit dans le système octal correspond à 500 en décimal
echo "<br> 0x1F4 Le nombre entier 1F4 écrit dans le système hexa correspond à 500 en décimal:";
echo 0x1F4,"\n" ; # le nombre entier 1F4 écrit dans le système hexa correspond à 500 en décimal
echo "<br> La constantePHP_INT_MAX correspond à la plus grande valeur entière";
echo PHP_INT_MAX,"\n"; # cette constante correspond à la plus grande valeur entière
echo "<br> en ajoutant 1 à PHP_INT_MAX, le nombre n'est plus entier, mais flottant";
echo PHP_INT_MAX + 1 ,"\n"; # en ajoutant 1, le nombre n'est plus entier, mais flottant
echo "<br> 42.5 un nombre décimal";
echo 42.5,"\n" ; # un nombre décimal
echo "<br> 4.25e3 un nombre décimal avec un exposant positif, ici 4250: ";
echo 4.25e3,"\n" ; # un nombre décimal avec un exposant positif, ici 4250
echo "<br> 4.25e-3 un nombre décimal avec un exposant négatif, ici 0.00425: ";
echo 4.25e-3,"\n" ; # un nombre décimal avec un exposant négatif, ici 0.00425
echo "<br> 0.1+0.2 la somme de 0,1 et 0,2 vaut 0,3: ";
echo 0.1+0.2,"\n"; # la somme de 0,1 et 0,2 vaut 0,3
echo "<br> var_dump(0.1+0.2) en mémoire, ça ne vaut pas vraiment 0,3:";
var_dump(0.1+0.2); # en mémoire, ça ne vaut pas vraiment 0,3
echo "<br> 9.3-5.3 la différence de 9,3 par 5,3 vaut 4: ";
echo 9.3-5.3,"\n"; # la différence de 9,3 par 5,3 vaut 4
echo "<br> var_dump(9.3-5.3) en mémoire, ça ne vaut pas vraiment 4: ";
var_dump(9.3-5.3); # en mémoire, ça ne vaut pas vraiment 4
?>