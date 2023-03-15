<?php
/* Créer une fonction puissance(n,p) et qui renvoie le résultat ! pas de pow à l'intérieur*/

function nbPuissance ($n, $e){
    $result = $n;
    for ($i = 1; $i < $e; $i++) {
        $result = $result * $n;
    }
    return $result;
}

function puissances(&$nombres, $exposant){

    for($i=0;$i<count($nombres);$i++){
        $nombres[$i] = nbPuissance($nombres[$i], $exposant);
    }
}