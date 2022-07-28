<?php
$nom = "Banana";

$price = "1.50€ le kg";

$img ="/img/banane.jpg";
?>


 <!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<h1>bienvenue</h1>
<div>
    <h2>article :<?= $nom ?> </h2>
    <h3>Prix :<?= $price  ?> </h3>
    <img src="img/banane.jpg">
</div>



</body>
</html>