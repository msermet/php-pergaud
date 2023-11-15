<?php

$nombre=0;
$nombreUtilisateur=intval(readline("Entrez un nombre : "));
$somme=0;

while ($nombre<=$nombreUtilisateur) {

    if ($nombre%2==0){
        echo $nombre . ' ';
        $somme=$somme+$nombre;
    }
    $nombre+=1;
}
echo PHP_EOL;
echo "La somme est : $somme";