<?php
/*
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.
*/

$notaMaxima = 10;
$notaEstudiant = 3;

function verificarNota($notaMaxima, $notaEstudiant){

    // Calcula el porcentatge
    
    $primeraDivisio = $notaMaxima*0.6;
    $segonaDivisioSup = $notaMaxima*0.59;
    $segonaDivisioInf = $notaMaxima *0.45;
    $terceraDivisioSup = $notaMaxima*0.44;
    $terceraDivisioInf = $notaMaxima*0.33;
    

    //Tria opció
    if($primeraDivisio <= $notaEstudiant){
        echo "Aquest estudiant está a Primera Divisió";
    }elseif(($segonaDivisioSup >= $notaEstudiant) && ($segonaDivisioInf<=$notaEstudiant)){
        echo "Aquest estudiant está a Segona Divisió";
    }elseif(($terceraDivisioSup >= $notaEstudiant) && ($terceraDivisioInf<=$notaEstudiant)){
        echo "Aquest estudiant está a Tercera Divisió";
    }else{
        echo "Aquest estudiant reaprobará";
    }
    
}

verificarNota($notaMaxima, $notaEstudiant);
?>