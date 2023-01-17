<?php
/*Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.*/

$parametre = 10;

function amagatall($parametre){
    for ($i = 0; $i <= 100; $i += $parametre) {
        echo "El número ", $i, "<br/>";
    }
}
amagatall($parametre);

?>