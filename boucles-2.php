<?php
#Petite modif
$personnes = [];
do{
    # Affiche menu et demande choix
    echo "MENU:\n";
    echo "-----\n";
    echo "[A] Ajout personne\n";
    echo "[B] Rechercher\n";
    echo "[C] Lister\n";
    echo "[Q] Quitter\n";
    $choix = readline("");
    $choix = strtoupper($choix);

    # Traite choix
    switch ($choix){
        case 'A':
            echo "Entrez un prenom : ";
            $newPersonne = readline();
            $personnes[] = $newPersonne;
            break;
        case 'B':
            echo "Prénom à rechercher : ";
            $recherche = readline();
            if( in_array($recherche, $personnes) ){
                echo "=> Ce prénom existe\n";
            }else{
                echo "=> Ce prénom n'existe pas\n";
            }
            break;
        case 'C':
            foreach ($personnes as $personneActuelleDansLaBoucle){
                echo $personneActuelleDansLaBoucle ."\n";
            }
            break;
        default:
            break;
    }

}while($choix != 'Q');