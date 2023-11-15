<?php

$nombreUtilisateur=intval(readline("Saisir un nombre entre 0 et 1000 : "));
$nombreOrdinateur=random_int(0,1000);
$compteur=0;

while ($nombreUtilisateur<0 || $nombreUtilisateur>1000) {
    echo "Le nombre à saisir doit être compris entre 0 et 1000";
    echo PHP_EOL;
    $nombreUtilisateur=intval(readline("Saisir un nombre entre 0 et 1000 : "));
    echo PHP_EOL;
}


while ($nombreUtilisateur!=$nombreOrdinateur) {
    $nombreOrdinateur=random_int(0,1000);
    $compteur+=1;
    if ($compteur==200) {
        echo "Tu n'as pas deviné en moins de 200 coups!";
        break;
    }
}

if ($compteur<200){
    echo "Le nombre à deviner a été trouvé en $compteur coups !";
}

