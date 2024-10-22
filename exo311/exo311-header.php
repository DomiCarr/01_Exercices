<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Nouvelle Techno</title>
</head>

<body>
    <header>
        <h3>Exo 311: PHP NT : Site de gestion des articles</h3>
        <section>
            <!-- utilisation de l'operation de coalesnce nulle -->
            <!-- si $section n'existe pas alors on met "Toto" -->
            <h1><?= $section ?? "Accueil" ?></h1>
        </section>
    </header>