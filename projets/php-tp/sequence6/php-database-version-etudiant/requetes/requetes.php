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
        ["titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie]=$article;
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
        ["titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie]=$article;
        foreach ($tableCategorie as $idCat=>$nom){
            if ($id_categorie==$idCat) {
                ["libelle"=>$libelle]=$nom;
                $resultats[]=array("id"=>$id,"titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie,"libelle"=>$libelle);
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
function rechercherArticlesParDateSuperieure(array $tableArticle, array $tableAuteur, $dateLimite): array {
    $resultats = [];
    foreach ($tableArticle as $id => $article) {
        ["date_creation" => $dateCreation, "id_auteur" => $idAuteur] = $article;
        $dateArticle = DateTime::createFromFormat('d-m-Y', $dateCreation);
        $dateLimiteObj = DateTime::createFromFormat('d-m-Y', $dateLimite);
        if ($dateArticle && $dateArticle > $dateLimiteObj) {
            ["titre" => $titre, "contenu" => $contenu] = $article;
            $auteur = $tableAuteur[$idAuteur] ?? null;
            if ($auteur) {
                ["prenom" => $prenom, "nom" => $nom] = $auteur;
                $resultats[] = ["id" => $id, "titre" => $titre, "contenu" => $contenu, "date creation" => $dateCreation, "prenom auteur" => $prenom, "nom auteur" => $nom,];
            }
        }
    }

    return $resultats;
}


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticlesOrdreAlphabetique(array $tableArticle,array $tableCategorie) : array {
    $resultats = [];
    foreach ($tableArticle as $id=>$article) {
        ["titre"=>$titre,"date_creation"=>$date_creation,"id_categorie"=>$id_categorie]=$article;
        foreach ($tableCategorie as $idCat=>$nom){
            if ($id_categorie==$idCat) {
                ["libelle"=>$libelle]=$nom;
                $resultats[]=array("id"=>$id,"titre"=>$titre,"date_creation"=>$date_creation,"libelle"=>$libelle);
            }
        }
    }
    usort($resultats, function ($a, $b) {
        return strcmp($a['titre'], $b['titre']);
    });
    return $resultats;
}

/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
// PLACER ICI VOTRE FONCTION
function rechercherNombreArticlesPostes(array $tableArticle,string $auteurId) : int {
    $resultats = 0;
    foreach ($tableArticle as $id=>$article) {
        ["id_auteur" => $id_auteur] = $article;
        if ($id_auteur == $auteurId) {
            $resultats += 1;
        }
    }
    return $resultats;
}

/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION
function nombreArticlesParAuteurAvecDetails(array $tableArticle,array $tableAuteur) : array {
    $nombreArticlesParAuteur = [];
    foreach ($tableArticle as $id => $article) {
        ["id_auteur" => $id_auteur] = $article;
        foreach ($tableAuteur as $id_aut => $auteur) {
            if ($id_auteur == $id_aut) {
                ["prenom" => $prenom, "nom" => $nom] = $auteur;
                if (!isset($nombreArticlesParAuteur[$id_auteur])) {
                    $nombreArticlesParAuteur[$id_auteur] = ["id_auteur" => $id_auteur, "prenom" => $prenom, "nom" => $nom, "nombre_articles" => 1];
                } else {
                    $nombreArticlesParAuteur[$id_auteur]['nombre_articles']++;
                }
            }
        }
    }

    return $nombreArticlesParAuteur;
}