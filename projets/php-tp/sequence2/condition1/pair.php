<?php
//Demander la saisie d'un nombre
//Afficher si le nombre est pair ou impair

$nombre=readline("Saississez un nombre : ");
if ($nombre % 2 == 0) {                                   // % est un modulo
    echo "Le nombre $nombre est pair";
} else {
    echo "Le nombre $nombre est impair";
}
