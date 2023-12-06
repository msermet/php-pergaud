<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/

/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherArticlesActifs(array $tableArticle) : array {
    $resultats = [];
    foreach ($tableArticle as $id=>$article) {
        ["titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"actif"=>$actif,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie]=$article;
        if ($actif) {
            $resultats[]=array("titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie);
        }
    }
    return $resultats;
}

/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticleDUneCategorie(array $tableArticle,string $categorieId) : array {
    $resultats = [];
    foreach ($tableArticle as $id=>$article) {
        ["titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"actif"=>$actif,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie]=$article;
        if ($id_categorie==$categorieId) {
            $resultats[]=array("titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie);
        }
    }
    return $resultats;
}

/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticles(array $tableArticle,array $tableCategorie) : array {
    $resultats = [];
    foreach ($tableArticle as $id=>$article) {
        ["titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"actif"=>$actif,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie]=$article;
        foreach ($tableCategorie as $idCat=>$nom){
            if ($id_categorie==$idCat) {
                ["libelle"=>$libelle]=$nom;
                $resultats[]=array("titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie,"libelle"=>$libelle);
            }
        }
    }
    return $resultats;
}

/* Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
// PLACER ICI VOTRE FONCTION


/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION
