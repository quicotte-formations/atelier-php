<?php

function test(array $x)
{
    $y = [2, 3, 4];
    $z = [...$y, ...$x];
    var_dump($z);
}

test([5, 2]);

function afficheTout(string...$mots)
{
    foreach ($mots as $motActuel) {
        echo $motActuel . "\n";
    }
}

afficheTout("bonjour", "tout", "le", "monde");