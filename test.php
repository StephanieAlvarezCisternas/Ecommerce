<?php



function hello ($nom, $prenom){
echo "Bonjour"." ". $nom. " ". $prenom;
};

hello("Stéphanie", "ALVAREZ");

?>

<?php

function totalRepas($livraison, $total){

    return $total- $livraison;
}

echo totalRepas(3.50 , 15);

?>

<?php

function getTotalPrice($quantity , $price){
    return $quantity * $price;
}
echo getTotalPrice(3, 10);




