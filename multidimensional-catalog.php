<?php
require "my-functions.php";

$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 45057,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://boulanger.scene7.com/is/image/Boulanger/0194252716151_h_f_l_0"
    ],

    "ipad" => [
        "name" => "iPad",
        "price" => 45099,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-pro-12-11-select-202104_GEO_FR_FMT_WHH?wid=2000&hei=2000&fmt=jpeg&qlt=90&.v=1617865124000"
    ],
    "imac" => [
        "name" => "iMac" ,
        "price" => 80099 ,
        "weight" => 1500 ,
        "discount" => 20 ,
        "picture_url" =>"https://www.tradeinn.com/f/13781/137819843/apple-ordinateur-all-in-one-imac-21.5-i5-2.3ghz-8gb-256gb-ssd.jpg"
    ],
];
?>

<?php

foreach ($products as $value){?>
  <div>
      <h3>Nom du produit : <?= $value ["name"]  ?> </h3>
      <h3> Prix: <?php formatPrice($value ["price"]);?> </h3>
      <h4> Discount: <?php formatPrice(discountedPrice ($value ["price"], $value ["discount"]));?> </h4>
      <h3> PrixHT: <?php formatPrice(priceExcludingVAT($value ["price"]));?> </h3>
      <img src=" <?= $value ["picture_url"]?>  "width = "250px" height="250px">

  </div>

<?php } ?>
