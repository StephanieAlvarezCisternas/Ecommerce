<?php


function formatPrice($centimes){
    $centimes = $centimes/100;
    echo number_format($centimes, 2)."€";
}

function priceExcludingVAT($ttc){
    $tva = 20;
    $ht = (100*$ttc)/ (100+$tva);
    return $ht;
}

function discountedPrice($price, $discount ){
    return ($price-$price*$discount/100);
}