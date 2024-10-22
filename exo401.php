<?php

if(""==null){ # compare la chaîne de caractère vide avec null
	echo "une chaîne vide !", "\n";
    echo "<br>";
}
if([]==null){ # compare le tableau vide avec null
	echo "un tableau vide !","\n";
    echo "<br>";
}
var_dump(true) ; # affiche bool(true)
echo "<br>";
var_dump(false) ; # affiche bool(false)
echo "<br>";
var_dump(2==1) ; # affiche le résultat du test "2 est-il égal à 1", soit bool(false)
echo "<br>";
var_dump(2>1) ; # affiche le résultat du test "2 est-il supérieur à 1", soit bool(true)
echo "<br>";
var_dump(2!=1) ; # affiche le résultat du test "2 est-il différent de 1", soit bool(true)
echo "<br>";
var_dump(2<=1) ; # affiche le résultat du test "2 est-il inférieur ou égale à 1", soit bool(false)
?>