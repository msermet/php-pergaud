<?php

$coefficientA=intval(readline("Entrer le coefficient a : "));
$coefficientB=intval(readline("Entrer le coefficient b : "));
$coefficientC=intval(readline("Entrer le coefficient c : "));
echo "Résolution de l'équation ".$coefficientA."x*2+".$coefficientB."x+".$coefficientC."=0";
echo PHP_EOL;
$discriminant=($coefficientB)**2-(4*$coefficientA*$coefficientC);

if($discriminant<0) {
    echo "Cette équation n’a pas de solutions";
} elseif($discriminant>0) {
    $racine1=-($coefficientB+sqrt($discriminant))/(2*$coefficientA);
    $racine2=-($coefficientB-sqrt($discriminant))/(2*$coefficientA);
    echo "Il y a deux équations distinctes : x1=$racine1 et x2=$racine2";
} else {
    echo "Il y a une solution : x=-$coefficientB/(2*$coefficientA)";
}