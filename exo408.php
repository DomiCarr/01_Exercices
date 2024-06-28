<?php

echo "<br> -------------------------------";
echo "<br> Tests fonctions tableaux: ";
echo "<br> -------------------------------";

$tableau = [1,2,3,2,3,4,25];
echo "<br> \$tableau = [1,2,3,2,3,4,25]";

echo "<br> Fonction count : Compter le nombre d'éléments : ", count($tableau);
echo "<br> Fonction in_array : On recherche 3 dans le tableau : ", var_dump(in_array(3, $tableau));
echo "<br> Fonction in_array : On recherche 8 dans le tableau : ", var_dump(in_array(8, $tableau));
echo "<br> Fonction is_array : On vérifie si \$tableau est de type tableau : ", var_dump(is_array($tableau));
echo "<br> Fonction array_unique : supprime les valeurs en doublon du tableau : ", var_dump(array_unique($tableau));
echo "<br> Fonction array_reverse : inverse les valeurs du tableau : ", var_dump(array_reverse($tableau));
echo "<br> Fonction sort : tri le tableau en croissant: ", var_dump(sort($tableau))," ", var_dump($tableau);
echo "<br> Fonction rsort : tri le tableau en décroissant : ", var_dump(rsort($tableau))," ", var_dump($tableau);
echo "<br> Fonction implode : transforme le tableau en string : ", var_dump(implode(";",$tableau));
echo "<br> Fonction max : renvoie  la valeur la plus grande : ", var_dump(max($tableau));
echo "<br> Fonction min : renvoie  la valeur la plus petite : ", var_dump(min($tableau));


?>