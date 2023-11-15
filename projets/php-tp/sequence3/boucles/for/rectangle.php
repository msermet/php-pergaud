<?php

$largeur=intval(readline("Largeur du rectangle : "));
$hauteur=intval(readline("Hauteur du rectangle : "));

for ($x=0;$x<$hauteur;$x++) {
    echo PHP_EOL;
    echo "*"." ";
    for ($i=0;$i<$largeur-1;$i++) {
        echo "*"." ";
    }
}