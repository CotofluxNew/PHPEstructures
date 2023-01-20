<?php
/*
Ens han demanat un llistat de cada any on es van produir jocs olímpics des de 1960 inclòs fins al 2016. Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat. */

$anyInici = 1960;
$anyFi = 2016;
$frequencia = 4;

    while ($anyFi > $anyInici) {
        $anyInici = $anyInici + $frequencia;
        echo $anyInici."<br/>";
    }


?>