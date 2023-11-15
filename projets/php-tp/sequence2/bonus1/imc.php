<?php

$poids=readline("Saisir votre poids (en kg) : ");
$taille=readline("Saisir votre taille (en mètre) : ");

if ($poids<0 || $taille<0) {
    exit ("Erreur, une ou plusieurs valeurs saisies sont négatives");
} else {
    $imc=$poids/($taille*$taille);
    $imcArrondie=round($imc,1);
    echo "$imcArrondie";
    echo PHP_EOL;

    if ($imc<18.5) {
        echo "Maigreur";
    } elseif ($imc>=18.5 && $imc<25) {
        echo "Normal";
    } elseif ($imc>=25 && $imc<30) {
        echo "Surpoids";
    } elseif ($imc>=30 && $imc<40) {
        echo "Obésité modérée";
    } else {
        echo "Obésité sévère";
    }
}


