<?php /* Calculer la factorielle d'un nombre demandé à l'utilisateur.*/

$a = readline('nb  : ');
$result = $a;
while ($a > 1) {
    $result *= --$a;
}
echo 'Le résultat est : ' . $result;

