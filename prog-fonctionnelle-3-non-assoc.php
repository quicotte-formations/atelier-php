<?php
/*créer un tableau de tabl associatifs de pays / population:
chine: 1400
france:70
belgique:10
russie:250
* A partir du même tableau de pays,
filtrer uniquement les pays de plus de 100 de population
*/
$paysPop = [
    ['pays' => 'france', 'pop' => 70],
    ['pays' => 'chine', 'pop' => 1400],
    ['pays' => 'belgique', 'pop' => 10],
    ['pays' => 'russie', 'pop' => 146],
    ['pays' => 'suisse', 'pop' => 9],
    ['pays' => 'allemagne', 'pop' => 85],
];
$popMin = 20;
$paysFiltre = [];
#appel avec un paramètre :use ($popMin)
$paysFiltre = array_filter($paysPop, function ($paysActuel) use ($popMin) {
    if ($paysActuel['pop'] > $popMin) {
        return $paysActuel;
    }
});
/*Appel sans paramètre la population minimal est écrite dans la fonction
$paysFiltre[]=array_filter($paysPop, function ($paysActuel) {
        if ($paysActuel['pop'] > 20) {
            return $paysActuel;
        }
    });
*/
print_r($paysFiltre);