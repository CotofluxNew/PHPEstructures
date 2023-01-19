<?php

/*Escriure un programa PHP per calcular la suma dels dos valors enters donats. Si els dos valors són iguals, torna el doble de la seva suma.*/

function suma($valor1,$valor2){
    if($valor1 == $valor2){
        $sumaValors = $valor1+$valor2;
        $dobleSuma = $sumaValors*2;
        return $dobleSuma;
    }else{
        $laSuma = $valor1+$valor2;
        return $laSuma;
    }
}
echo "La primera ",suma(1,2), "<br/>";
echo "La segona ", suma(3,2), "<br/>";
echo "La tercera ",suma(2,2), "<br/>";


?>