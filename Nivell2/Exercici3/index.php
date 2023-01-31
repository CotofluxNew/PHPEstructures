<?php
/*
Imagina que som a una botiga on es ven:

Xocolata: 1 euro
Xiclets: 0,50 euros
Caramels: 1,50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.
*/
$xocolataPreu = 1;
$xicletPreu = 0.5;
$caramelPreu = 1.5;

function comprar($xocolata,$xiclet,$caramel, $xocolataPreu, $xicletPreu, $caramelPreu){

    $calculTotal = $xocolata*$xocolataPreu + $xiclet*$xicletPreu + $caramel*$caramelPreu;
    return $calculTotal;
    
}

echo "El total de la compra ".comprar(2, 1, 1, $xocolataPreu, $xicletPreu, $caramelPreu);


?>