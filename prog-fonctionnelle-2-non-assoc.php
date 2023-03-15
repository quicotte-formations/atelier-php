<?php
/*créer un tableau de tabl associatifs de pays / population:
chine: 1400
france:70
belgique:10
russie:250
trier par population décroissante
*/
$paysPop = [
    ['pays' => 'france', 'pop' => 70],
    ['pays' => 'chine', 'pop' => 1400],
    ['pays' => 'belgique', 'pop' => 10],
    ['pays' => 'russie', 'pop' => 146],
    ['pays' => 'suisse', 'pop' => 9],
    ['pays' => 'allemagne', 'pop' => 85],
];
usort($paysPop, function ($pays1, $pays2) {
    if ($pays1['pop'] > $pays2['pop']) {
        $comparateur = -1;
    } elseif ($pays1['pop'] < $pays2['pop']) {
        $comparateur = 1;
    } else {
        $comparateur = 0;
    }
    return $comparateur;
});
echo "Après le tri \n";
print_r($paysPop);
