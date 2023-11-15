<?php

$nombre1=readline("Saissir un nombre entier: ");
$nombre2=readline("Saissir un nombre entier: ");
if ($nombre2==0) {
    echo "Division par zéro impossible";
} else {
    $resultat=round($nombre1/$nombre2,2);
    echo "Le résultat de la divison de $nombre1 par $nombre2 est $resultat";
}
