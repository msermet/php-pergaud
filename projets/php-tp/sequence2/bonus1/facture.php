<?php

$nbMinutes=intval(readline("Saisir le nombre de minutes d'appel utilisées : "));
$nbSms=intval(readline("Saisir le nombre de SMS envoyés : "));
$nbGo=intval(readline("Saisir la quantité de données consommées en Go : "));

if ($nbMinutes<0 || $nbSms<0 || $nbGo<0) {
    echo "Erreur, une ou plusieurs valeurs saisies sont négatives";
}
$tarifMinuteAppel=$nbMinutes*0.06;
$tarifNbSms=$nbSms*0.001;
$tarifNbGo=$nbGo*0.1;
$total=$tarifNbGo+$tarifMinuteAppel+$tarifNbSms;

echo "Le coût total de la facture est de $total euros.";