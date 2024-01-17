<?php

/**
 * @var PDO $connexion
 */
require "config/db-lister-emprunts-adherent-config.php";

$idAdherent=intval(readline("Saisir l'identifiant d'un adhérent : "));

// Préparer la requête
$requete = $connexion -> prepare("SELECT nom, prenom, titre, auteur, date_emprunt
                                        FROM livre, emprunt, adherent
                                        WHERE livre.id_livre = emprunt.id_livre
                                        AND adherent.id_adherent = emprunt.id_adherent
                                        AND disponible = 0
                                        AND emprunt.id_adherent = :idAdherent
                                        AND date_retour IS NULL;");


// Exécuter la requête
$requete->execute([
    ":idAdherent"=>$idAdherent
]);

// Récupérer le résultat
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultats as $resultat) {
    ["nom"=>$nom,"prenom"=>$prenom,"titre"=>$titre,"auteur"=>$auteur,"date_emprunt"=>$dateEmprunt]=$resultat;
    echo "$nom $prenom a emprunté le livre $titre écrit par $auteur le $dateEmprunt".PHP_EOL;
}
