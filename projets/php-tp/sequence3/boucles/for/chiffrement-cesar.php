<?php

$chaine = readline("Saisir une phrase : ");
$decalage = readline("Saisir un décalage que vous voulez appliquez : ");

for ($i=0 ;$i<strlen($chaine); $i++) {
    $lettre = substr($chaine, $i, 1);
    for ($x=0; $x<$decalage; $x++) {
        $lettre++;
        if (strlen($lettre)>=2) {
            $lettre = substr($lettre, -1, 1);
        }
    }
    echo $lettre;
}
