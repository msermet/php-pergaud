<?php

// Afficher le nombre d'étudiants par promotion

/**
 * @var PDO $connexion
 */
require "config/db-config.php";

// Préparer la requête
$requete = $connexion -> prepare("SELECT nom_promotion,COUNT(*) AS NbEtudiants
                                        FROM etudiant as e,promotion as p
                                        WHERE p.id_promotion=e.id_promotion
                                        GROUP BY nom_promotion;");

// Exécuter la requête
$requete -> execute();

// Récupérer le résultat
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultat as $valeur) {
    ["nom_promotion"=>$nomPromotion,"NbEtudiants"=>$nbEtudiants]=$valeur;
    echo "$nomPromotion : $nbEtudiants étudiants".PHP_EOL;
}

// Deuxième partie de l'exercice
echo PHP_EOL;

$requetes = $connexion -> prepare("SELECT nom_promotion,nom_etudiant
                                         FROM etudiant as e,promotion as p
                                         WHERE p.id_promotion=e.id_promotion
                                         ORDER BY nom_promotion,nom_etudiant;");

// Exécuter la requête
$requetes -> execute();

// Récupérer le résultat
$resultats = $requetes->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultats as $valeur) {
    ["nom_promotion"=>$nomPromotion,"nom_etudiant"=>$nomEtudiant]=$valeur;
    echo "$nomPromotion : $nomEtudiant".PHP_EOL;
}

