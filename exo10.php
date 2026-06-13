<?php
$livres = [
    [
        "titre" => "Le Vieux Nègre et la Médaille",
        "auteur" => "Ferdinand Oyono",
        "disponible" => true
    ],
    [
        "titre" => "Une Si Longue Lettre",
        "auteur" => "Mariama Bâ",
        "disponible" => false
    ],
    [
        "titre" => "L'Enfant Noir",
        "auteur" => "Camara Laye",
        "disponible" => true
    ]
];

while (true)
      {
    echo "\n MENU BIBLIOTHÈQUE \n";
    echo "1. Afficher tous les livres\n";
    echo "2. Afficher uniquement les livres disponibles\n";
    echo "3. Compter le nombre total de livres\n";
    echo "4. Ajouter un nouveau livre\n";
    echo "5. Quitter le programme\n";
    
    $choix = readline("Choisissez une option (1-5) : ");
    echo "\n";

    switch ($choix) {
        case 1:
            echo " Catalogue complet de la bibliothèque \n";
            foreach ($livres as $livre) {
                $statut = $livre["disponible"] ? "Disponible" : "Emprunté";
                echo "- " . $livre["titre"] . " de " . $livre["auteur"] . " [" . $statut . "]\n";
            }
            break;

        case 2:
            echo " Livres disponibles uniquement \n";
            $aucunDisponible = true;
            foreach ($livres as $livre) {
                if ($livre["disponible"] === true) {
                    echo "- " . $livre["titre"] . " par " . $livre["auteur"] . "\n";
                    $aucunDisponible = false;
                }
            }
            if ($aucunDisponible) {
                echo "Aucun livre n'est disponible actuellement.\n";
            }
            break;

        case 3:
            echo "Nombre total de livres dans le catalogue : " . count($livres) . "\n";
            break;

        case 4:
            echo "--- Ajouter un nouveau livre ---\n";
            $titre = readline("Entrez le titre du livre : ");
            $auteur = readline("Entrez l'auteur du livre : ");
            
            $livres[] = [
                "titre" => $titre,
                "auteur" => $auteur,
                "disponible" => true
            ];
            echo "Le livre a bien été ajouté au catalogue !\n";
            break;

        case 5:
            echo "Merci d'avoir utilisé l'application. Au revoir !\n";
            exit; 

        default:
            echo "Option invalide ! Veuillez choisir un nombre entre 1 et 5.\n";
            break;
    }
}
?>