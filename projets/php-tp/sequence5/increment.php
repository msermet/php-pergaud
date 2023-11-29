<?php

function incrementer(int $nombre) : int {
    $nombre+=1;
    return $nombre;
}

$compteur=1;
$compteur=incrementer($compteur);
echo $compteur;

// Autre façon de faire :

//function incrementer(int& $nombre) : void {
//    $nombre+=1;
//}
//
//$compteur=1;
//incrementer($compteur);
//echo $compteur;