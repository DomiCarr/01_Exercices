<?php 

//$recipe_title = "Flan patissier";
//$recipe_duration = "60 minutes";
//$recipe_difficulty = "**";

require_once "./exo414/exo414_recipe_loader.php";

foreach (getRecipes() as $recipe) {
    $recipe_title = $recipe['title'];
    $recipe_duration = $recipe['time'];
    $recipe_difficulty = $recipe['difficulty'];

    // on charge la page HTML
require_once "./exo414/exo414_template.php";
}

?>