<?php

$phraseUtilisateur=readline("Saisir une phrase à inverser : ");
$phraseInversee="";
$position=-1;
$taille=strlen($phraseUtilisateur);
$compteur=0;

while ($compteur!=$taille) {
    $phraseInversee=$phraseInversee+;
    $phraseUtilisateur=substr($phraseUtilisateur,0,-1);
    $compteur+=1;
}
echo "$phraseInversee";