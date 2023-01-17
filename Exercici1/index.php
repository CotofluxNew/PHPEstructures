
<?php
/*Programa una funció que, donat un número qualsevol (per exemple, la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla. */


function esParell($laMevaEdat){
    
    $divisio = $laMevaEdat/2;
    $esEnter=is_int($divisio);
    //var_dump ($esEnter);

    if($esEnter){
        return TRUE;
    }else{
        return FALSE ;
    }
    
}

$resultat = esParell(34);
//var_dump($resultat);

if($resultat == TRUE){
    echo "Es parell";
}else{
    echo "Es imparell";
}


?>