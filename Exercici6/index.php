<?php
/* 
Charlie em va mossegar el dit!

Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
*/

function isBitten(){
    $numero = rand (0,1);
    //echo $numero;

    if($numero == 0){
        return FALSE;
    }else{
        return TRUE;
    }
}

if(isBitten()){
    echo "Charlie em va mossegar el dit!";
}else{
    echo "Charlie NO em va mossegar el dit!";
};


?>