<?php
$name = "Banana";
$price = 1.50;
$img ="/img/banane.jpg";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
    </style>
</head>

<body>
<?php
include "header.php";
?>


<h1>bienvenue</h1>
<div>
    <h2>article :<?= $name ?> </h2>
    <h3>Prix :<?= $price . "€ le kilo"  ?> </h3>
    <img src="img/banane.jpg">

</div>

    <?php include "footer.php"; ?>
</body>
</html>

