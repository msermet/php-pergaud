<?php

// Inclure le fichier dans lequel se trouve la fonction estPair()
require 'cours-fonctions.php';

$nombreUtilisateur=readline("Saisir un nombre : ");
if (estPair($nombreUtilisateur)) {    // Quand une fonction renvoie un booléen on est pas obligé de mettre "==true" dans le if d'affichage
    echo "Le nombre $nombreUtilisateur est : pair";
} else {
    echo "Le nombre $nombreUtilisateur est : impair";
}
