<?php

$fondRouge="\033[41m";
$texteRouge="\033[31m";
$fondVert="\033[42m";
$texteVert="\033[32m";
$normal="\033[0m";

$distanceKM=readline("Saisir un distance en kms : ");
$dureeDemandee=readline("Saisir une durée (en format h:mn) : ");
$heures=substr("$dureeDemandee",0,1);
$minutes=substr("$dureeDemandee",2,2);
if ($minutes>59) {
    echo $texteRouge."ERREUR la durée $dureeDemandee est invalide".$normal;
} else {
    echo PHP_EOL;
    $duree= intval($minutes)/60+intval($heures);
    $vitesse=ceil($distanceKM/$duree);
    echo "La vitesse moyenne du trajet est de $vitesse km/h";
    echo PHP_EOL;
    if ($vitesse>=90) {
        echo $fondRouge."Vous êtes au dessus des 90 km/h".$normal;
    } else {
        echo $fondVert."Vous êtes en dessous des 90 km/h".$normal;
    }

}