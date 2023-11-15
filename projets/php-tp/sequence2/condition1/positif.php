<?php
//Demander la saisie d'un nombre à l'utilisateur
//Afficher si le nombre saisi est positif ou négatif

$nombre=readline("Saississez un nombre : ");
if ($nombre >= 0){
    echo "Le nombre est positif";
} else {
    echo"Le nombre est négatif";
}