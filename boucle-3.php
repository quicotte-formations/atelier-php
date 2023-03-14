<?php /* Calculer la factorielle d'un nombre demandé à l'utilisateur.*/
echo "entrez un nombre :";
$a = readline();
$result = 1;
if ($a==0){
    echo "\n $a ! = 1";
}else {
    for ($i = 1; $i <= $a; $i++) {
        $result = $result * $i;
    }
    echo "\n $a ! = $result";
}