
<?php
/*Programa una funció que, donat un número qualsevol (per exemple, la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla. */


function esParell($laMevaEdat){
    
    $divisio = $laMevaEdat/2;
    $esEnter=is_int($divisio);

    if($esEnter){
        return TRUE;
    }else{
        return FALSE;
    }
    
}

echo esParell(35);

?>