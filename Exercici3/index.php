<?php

/*Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.*/

$parametreNumeric  = 6;


function calcula($parametreNumeric){
    for ($i = 0; $i <= $parametreNumeric; $i += 2) {
        echo "El número ", $i, "<br/>";
    }
}

calcula($parametreNumeric);

?>

