<?php

/**
 * Fonctions :
 * usort            tri
 * array_filter     filtrage
 * array_map        conversion de format
 */

$personnes = ['Roman Polanski', 'Quentin Tarantino', 'Joel Cohen', 'Ethan Cohen'];

# Transformation
$personnes = array_map( function($elemAct){

    $prenomNom = explode(' ', $elemAct);
    $prenomNom = [
        'prenom'=>$prenomNom[0],
        'nom'=>$prenomNom[1]
    ];

    return $prenomNom;

}, $personnes );

# Tri par nom puis prénom
usort( $personnes, function($personne1, $personne2){

    $comparateur = strcmp($personne1['nom'], $personne2['nom']);

    # Renvoie la comparaison du nom si noms différents
    if( $comparateur!=0 ){
        return $comparateur;
    }

    # Les noms sont égaux : renvoie comparaison des prénoms
    return strcmp($personne1['prenom'], $personne2['prenom']);
} );

# Filtrage : uniquement les noms Cohen
$personnes = array_filter( $personnes, function($personneAct){
    return str_contains($personneAct['nom'], 'Cohen');
} );

echo json_encode($personnes, JSON_PRETTY_PRINT);