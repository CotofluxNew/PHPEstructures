<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/*Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/ 

?><h1>quantitat total a pagar</h1><?php



function calculaCostTrucada($minutsTrucada){

    if($minutsTrucada<3){
        echo "El cost de la trucada es de 0.10 centims";
    }else{
        $calcuCostTrucada = ($minutsTrucada-3)*0.5 +0.10;
        echo "El cost de la trucada es de ".$calcuCostTrucada,"€<br/>";
        echo "Has trucat ".$minutsTrucada. " minuts.","<br/>";
    }

}

calculaCostTrucada(7);

?>

</body>
</html>