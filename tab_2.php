<?php
/**
 * 2. Créer à l'initialisation un tableau associatif $paysCapitales avec comme clé le nom du pays et comme valeur sa capitale

Demander à l'utilisateur d'entrer le nom d'un pays, puis afficher sa capitale ( achtung: pas de if )
 */
$countries = [
    "france"=>"paris",
    "maroc"=>"rabbat",
    "equateur"=>"montevideo"
];

echo "Veuillez entrer un pays \n";
$search = readline();
if (array_key_exists($search, $countries)) {
    echo "La capitale de $search est =====> $countries[$search]";
} else {
    echo "Aucune information disponible pour $search";
}