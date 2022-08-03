<?php $products = ["iPhone", "iPad", "iMac"];

sort($products);

print_r($products);
echo "<br>";


echo $products[0] . "<br>";
echo $products[2] . "<br>";
echo "<br>";
for ($i =0; $i< count($products); $i++){
echo $products[$i];
}