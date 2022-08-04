<?php
require "my-functions.php";
$iphone = [
    "name" => "iPhone" ,
    "price" => 45000 ,
    "weight" => 200 ,
    "discount" => 10 ,
    "picture_url" =>"https://images.frandroid.com/wp-content/uploads/2020/10/iphone-12-pro-max-frandroid-2020.png"
];

$imac = [
    "name" => "iMac" ,
    "price" => 80000 ,
    "weight" => 1500 ,
    "discount" => 20 ,
    "picture_url" =>"https://www.tradeinn.com/f/13781/137819843/apple-ordinateur-all-in-one-imac-21.5-i5-2.3ghz-8gb-256gb-ssd.jpg"
];

$ipad = [
    "name" => "iPad" ,
    "price" => 70000 ,
    "weight" => 500 ,
    "discount" => 15 ,
    "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/refurb-ipad-pro-12-cell-silver-2020?wid=1150&hei=1150&fmt=jpeg&qlt=95&.v=1626721059000"
]
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>

 
</head>
<body>
        <div>
            <h3><?= $iphone['name'] ?></h3>
            <p>Price : <?= formatPrice($iphone ["price"]) ?></p>
            <h4> Discount: <?= formatPrice(discountedPrice ($iphone ["price"], $iphone ["discount"]));?> </h4>
            <h3> PrixHT: <?= formatPrice(priceExcludingVAT($iphone ["price"]));?> </h3>
            <img src=<?= $iphone['picture_url'] ?> alt="picture" "width = "250px" height="250px">
        </div>

        <div>
            <h3><?= $ipad['name'] ?></h3>
            <p>Price : <?=formatPrice($ipad ["price"]) ?></p>
            <h4> Discount: <?= formatPrice(discountedPrice ($ipad ["price"], $ipad ["discount"]));?> </h4>
            <h3> PrixHT: <?= formatPrice(priceExcludingVAT($ipad ["price"]));?> </h3>
            <img src=<?= $ipad['picture_url'] ?> "width = "250px" height="250px">
        </div>

        <div>
            <h3><?= $imac['name'] ?></h3>
            <p>Price : <?= formatPrice($imac ["price"]) ?></p>
            <h4> Discount: <?= formatPrice(discountedPrice ($imac ["price"], $imac ["discount"]));?> </h4>
            <h3> PrixHT: <?= formatPrice(priceExcludingVAT($imac ["price"]));?> </h3>
            <img src=<?= $imac['picture_url'] ?> "width = "250px" height="250px">
        </div>
</body>
</html>

