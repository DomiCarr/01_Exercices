<?php

echo "<br> -------------------------------";
echo "<br> Conditions: ";
echo "<br> -------------------------------";

$score = 77;
if ($score >= 95) { echo "<br> Score >= 95";} 
elseif ($score >= 85) { echo "<br> Score >= 85";}
elseif ($score >= 70) { echo "<br> Score >= 70";}
else { echo "<br> Score < 70";}

echo "<br> -------------------------------";
echo "<br> Opérateur ternaire ";
echo "<br> -------------------------------";

$result = ($score >=70) ? "Score >= 70" : "Score < 70";
echo "<br> ",$result;

echo "<br> -------------------------------";
echo "<br> Match ";
echo "<br> -------------------------------";

function direction ($direction) {
switch ($direction) {
    case "droite" : 
        echo "<br>";
        echo "on tourne à : ";
        echo $direction;
        break;
    case "gauche" : 
        echo "<br>";
        echo "on tourne à : ";
        echo $direction;
        break;
    case "haut" : 
        echo "<br>";
        echo "on monte";
        break;
    case "bas" : 
        echo "<br>";
        echo "on descend";
        break;
}
}

$direction = "haut";
direction ($direction);

$direction = "bas";
direction ($direction);

$direction = "gauche";
direction ($direction);

$direction = "droite";
direction ($direction);



echo "<br> -------------------------------";
echo "<br> Match ";
echo "<br> -------------------------------";

$color = "rouge";
$result = match ($color) {
"rouge" => "<br> Le tee-shirt est rouge.",
"vert" => "<br> Le tee-shirt est le vert.",
"bleu" => "<br> Le tee-shirt est le bleu.",
default => "<br> La couleur du tee-shirt est inconnue'."
};
echo $result; // Affiche "Le tee-shirt est rouge."

?>