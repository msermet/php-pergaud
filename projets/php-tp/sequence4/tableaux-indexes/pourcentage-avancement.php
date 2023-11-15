<?php

$tabElement=[];
$compteur=0;
$pourcent=0;
$texteRouge="\033[31m";
$texteVert="\033[32m";
$normal="\033[0m";

echo "debut traitement";
echo PHP_EOL;
for ($i=0;count($tabElement)<=100000;$i++) {
    $compteur++;
    $tabElement[]=2;
    while ($compteur==1000){
        $compteur=0;
        echo "En cours ".$texteRouge.round($pourcent,2)."%".$normal;
        $pourcent=$pourcent+1;
        echo PHP_EOL;
    }
}

echo $texteVert."100%".$normal;
echo PHP_EOL;
echo "fin traitement";
echo PHP_EOL;
echo "100000 valeurs ont été traitées !";
//foreach ($tabElement as $v) {
//    echo $v." ";                  //TEST TABLEAU FAHRENHEIT
//}